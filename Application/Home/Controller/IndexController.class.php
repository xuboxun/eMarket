<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $this->display();
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