<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {

    public function _initialize(){
        $header=A('Public'); 
        $header->header();
    }

    public function index(){
     
    }

    public function classa(){
      
        $this->show();
    }
    public function classb(){
        $header=A('Public'); 
        $header->header();

        $kind = $_GET['key'];
        $db1 = M('goods');
        $db2 = M('shop');
        // $db3 = M('goodsorder')

        $data['g_name'] = array('like',"%$kind%");
        $goods = $db1 -> where($data) -> select();
        // $shop = $db2 -> select();
        $length = count($goods);
        for ($i = 0; $i < $length; $i++) { 
            $goods[$i]['address'] = $db2 -> where('sid='.$goods[$i]['sid']) -> getField("s_address");
        }

        $this->assign('goods',$goods);
        $this->show();
    }
    public function detail(){
        $gid = $_GET['gid'];

        $db1 = M('goods');
        $db2 = M('shop');
        $db3 = M('business');
        $db4 = M('user');
        // 查找商品
        $data['gid'] = $gid;
        $goods = $db1 -> where($data) -> find();
        $this->assign("goods",$goods);
        // 查找店铺
        $data2['sid'] = $goods['sid'];
        $shop = $db2 -> where($data2) -> find();
         $this->assign("shop",$shop);
        // 查找店主
        $business = $db3 -> where('bid='.$shop['bid']) -> find();
        $this->assign("business",$business);

        // 推荐
        $kind = $goods['g_name'];
        $data4['g_name'] = array('like',"%$kind%");
        $other = $db1 -> where($data4) -> limit(6) -> select();
        $this->assign('other',$other);

        $user['username'] = $_SESSION['username'];
        $user = $db4 -> where($user) -> find();
        $this->assign('user',$user);

        $this->show();
    }

     //添加商品
     public function create_goods(){
     	     $data['sid']=1;
           $d=M("shop");
           $str=$d->where($data)->find();
           if($str){
                  $data['g_name']="苹果";
                  $data['g_img']="b.jpg";
                  $data['price']="55元/斤";
                  $data['count']="55";
                  $data['g_classa']="瓜果蔬菜";
                  $data["g_classb"]="鲜果";
                  $data['g_evaluate']="33%";
                  $data['sold']="3333";
                  $m=M("goods");
                  if($m->add($data)){
           	           echo "success";
                  }else{
                    	 echo "failure";
                  }
           }else{
                  echo "failure";
           }
     }

     public function buy(){
        $data['uid'] = $_POST['uid'];
        $data['gid'] = $_POST['gid'];
        $data['number'] = $_POST['number'];

        $db = M('goodsorder');
        $db2 = M('goods');
        $res = $db -> add($data);

        $data2['gid'] = $_POST['gid'];
        $goods = $db2 -> where($data2) -> find();

        $goods['sold'] = $goods['sold'] + $_POST['number'];
        $ren = $db2 -> where($data2) -> save($goods); // 更新销售量
        $this -> ajaxReturn($res);
     }
     
}