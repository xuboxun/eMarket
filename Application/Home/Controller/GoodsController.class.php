<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function classa(){

        $this->show();
    }
    public function classb(){
        $kind = $_GET['key'];
        $db1 = M('goods');
        $db2 = M('shop');
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
        $data['gid'] = $gid;
        // 查找商品
        $goods = $db1 -> where($data) -> find();
        $this->assign("goods",$goods);
        // 查找店铺
        $shop = $db2 -> where('sid='.$goods['sid']) -> find();
         $this->assign("shop",$shop);
        // 查找店主
        $business = $db3 -> where('bid='.$shop['bid']) -> find();
        $this->assign("business",$business);
        $this->show();
    }
    public function index(){
     
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
}