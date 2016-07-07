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
}