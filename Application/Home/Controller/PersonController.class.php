<?php
namespace Home\Controller;
use Think\Controller;
class PersonController extends Controller {
    public function bought(){
        $this->display();
     }
     public function cart(){
        $m=M("cart");
        $where["uid"]=1;
        $arr=$m->where($where)->select();
        if($arr){
            $i=0;$d=M("goods");
            foreach ($arr as $str) {
                $map['gid']=$str['gid'];
                $rew[$i]=$d->where($map)->find();
                $i++;
            }
           // var_dump($rew);
            $this->assign("list",$rew);
        }
        $this->display();
     }
     public function collect(){
        $this->display();
     }
     public function setting(){
        $this->display();
     }
     public function add_cart(){
        $uid=1;
        $gid=1;
        $p=A("Commen");
        if($p->check("uid","user",$uid)=="success" && $p->check("gid","goods",$gid)=="success"){
            $data['uid']=$uid;
            $data['gid']=$gid;
            $m=M("cart");
            $str=$m->where($data)->find();
            if($str){
                echo "failure";
            }else{
                if($m->add($data)){
                       echo "success";
               }else{
                  echo "failure";
               }
            }
        }else{
            echo "failure";
        }
     }
}