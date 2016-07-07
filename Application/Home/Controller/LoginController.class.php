<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
         $this->display();
     }
     public function Login(){
          $this->display();
     }
       //
     public function register(){
        $this->display();
     }
     public function findpwd(){
        $this->display();
     }


     //----------具体操作-----------------
     //用户注册  
     public function user_record(){
       // if($_POST){
        $data['username']="username";
        $data['password']="password";
        $data['email']="email"; 
        $data['tel']="tel";
     // }
        $m=M('user');
        if($m->add($data)){
        	echo "注册成功";
        }else{
        	echo "注册失败";
        }
     }
 }