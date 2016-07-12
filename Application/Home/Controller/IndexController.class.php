<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
        $header=A('Public'); 
        $header->header();
    }

    public function index(){

        $db1 = M('goods');
        $db2 = M('goodsorder');

        // 猜你喜欢
        $sqllove = "Select goods.gid,goods.g_name as name,goods.g_img as img,goods.price from goods JOIN goodsorder where goods.gid=goodsorder.gid GROUP BY goodsorder.gid order by (goodsorder.number) desc limit 6 ";
        $love = $db2 -> query($sqllove);
        // var_dump($love);
        $this->assign('love',$love);

        // 热销商品
        $sqlhot="Select goods.price as price,goods.g_name as name,goodsorder.number as number, goods.gid as gid,goods.g_img as img from goods JOIN goodsorder where goods.gid=goodsorder.gid GROUP BY goodsorder.gid order by sum(goodsorder.number) desc limit 6 ";
        $hotsold = $db2 -> query($sqlhot);
        $this->assign('hotsold',$hotsold);

        // 美食看看
        $look = null;
        $ran = "";
        $num = count($db1 -> select());
        for($i = 0;$i < 6;$i++){
           $ran .= rand(1, $num).",";
        }
        $sqllook="Select gid,g_name as name,g_img as img,price from goods where gid in (".$ran."0) order by gid desc limit 6";
        $look = $db1 -> query($sqllook);
        $this->assign('look',$look);


        $this->display();
     }
     
    public function side(){
        $where['guidea'] = $_POST['guidea'];
        $db = M('system');
        $guide = $db -> where($where) -> select();//选择所有
        $guideb = $db -> where($where) -> order('sysid asc') -> group('guideb') -> select();//B级
        $guidebnum = count($guideb);//计算多少B级
        for($i = 0;$i < $guidebnum;$i++){
            $arrb[$i] = $guideb[$i]['guideb'];
            $whereb['guideb'] = $arrb[$i];
            $guidec = $db -> where($whereb) -> order('sysid asc') -> select();//C级
            $guidecnum = count($guidec);
            for($j = 0;$j < $guidecnum;$j++){
                $arrc[$i][$j] = $guidec[$j]['guidec'];
            }
            // for()
        }
        // var_dump($resultnum);
        // var_dump($guideb);
        $arr[0] = $arrb;
        $arr[1] = $arrc;
        $this->ajaxReturn($arr);
    }

    public function search(){
        $search = $_POST['search'];
        $db1 = M('goods');
        $db2 = M('shop');
        $where['g_name'] = array('like',"%$search%");
        // $where['gname'] = array('like',"%$search%");

        $ans = $db1 -> where($where) -> limit(5) -> select();
        // $ans += $db2 -> where($where) -> limit(5) -> select();
        $this->ajaxReturn($ans);
    }
    //模糊查询
    public function widsearch(){
        $str="e66";
        $zd="email";
        $sjk="user";
     	//$where['email'] = ' (email like "%e%")  or ( email like "%a") ';
     	//$where['email'] = $str;
        for($i=0;$i<strlen($str)-1;$i++){
            $pl=" ".$zd." like '%".$str[$i]."%' or".$pl;
        }
        $pl=$pl." ".$zd." like '%".$str[$i]."%'";
        $sql="select * from ".$sjk." where".$pl;
        var_dump($sql);
        $Model = new \Think\Model();// 实例化一个model对象 没有对应任何数据表
        $arr= $Model->query($sql);
        // $pl="email like "
        // $sql="select * from user where ".;
     
        var_dump($arr);
    }

}