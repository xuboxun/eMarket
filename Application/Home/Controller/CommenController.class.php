<?php
namespace Home\Controller;
use Think\Controller;
class CommenController extends Controller {
    public function index(){
     
     }

 //   <span class="login_left">验证码：<input type="password" id="confirm" style="width:60px;" placeholder="验证码"/><img style="width:33.3333%;height:20px;position:relative;top:5px;" src="__APP__/home/Commen/verify" id="code" onclick="this.src=this.src+'?'+Math.random()" class="code" />
 
     //验证码
     public function verify(){
        $config= array(
            'fontSize'    =>   19,    // 验证码字体大小   
            'length'      =>   4,     // 验证码位数    
            'useNoise'    =>   false, // 关闭验证码杂点
            'imageW'      =>   140 ,      //验证码宽度 设置为0为自动计算 
            'imageH'      =>    40 ,    //验证码高度 设置为0为自动计算 
        );
        ob_clean();
        $Verify = new\Think\Verify($config);
        $Verify->codeSet = '0123456789'; 
        $Verify->entry();
     }
     //检查验证码
     Public function check_verify($code, $id = ''){
                   $verify = new \Think\Verify();
                   return $verify->check($code, $id);
     }

     //模糊查询
     public function widsearch(){
        $str="e66";//查询的关键字
        $zd="email";//字段名
        $sjk="user";//表名
        for($i=0;$i<strlen($str)-1;$i++){
            $pl=" ".$zd." like '%".$str[$i]."%' or".$pl;
        }
        $pl=$pl." ".$zd." like '%".$str[$i]."%'";
        $sql="select * from ".$sjk." where".$pl;
        var_dump($sql);
        $Model = new \Think\Model();// 实例化一个model对象 没有对应任何数据表
        $arr= $Model->query($sql);
        var_dump($arr);
     }
     //判断某一字段是否存在
     public function check($zd,$table,$con){
        $where[$zd]=$con;
        $m=M($table);
        $str=$m->where($where)->find();
        if($str){
<<<<<<< Updated upstream
           return "success";
        }else{
           return "failure";
=======
            echo "success";
        }else{
            echo "failure";
>>>>>>> Stashed changes
        }
     }
}