<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function header(){
        if(!isset($_SESSION['username']) || $_SESSION['username']==""){
            $nav['state'][0]="请登陆";
            $nav['url'][0]=U('Login/login');
            $nav['state'][1]="注册";
            $nav['url'][1]=U('Login/register');

        }else{
            // $con=M('user');
            // $where['username']=$_SESSION['username'];
            // $data=$con->where($where)->select();

            $nav['state'][1]="欢迎你 "."$_SESSION[username]";
            $nav['url'][1]="javascript:;";
            $nav['state'][0]="";
            $nav['url'][0]="javascript:;";

            // $this->assign('user',$data);
        }
        $this->assign('nav',$nav);
        // $this->assign('data',$data);
    }

}