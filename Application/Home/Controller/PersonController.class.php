<?php
namespace Home\Controller;
use Think\Controller;
class PersonController extends Controller {
    
    public function bought(){
       $uid=1;
 //        Select 
 // Blog.id as id,
 // Blog.name as name,
 // Blog.title as title,
 // Category.title as category_name,
 // User.name as username 
 // from think_blog Blog JOIN think_category Category JOIN think_user User 
 // where Blog.category_id=Category.id AND Blog.user_id=User.id
        $sql="Select goods.price as price,goods.g_name as name,user.uid as uid,goodsorder.number as number,
              goods.gid as gid,goods.g_img as img
              from user JOIN goods JOIN goodsorder 
              where goodsorder.gid=goods.gid AND goodsorder.uid=user.uid AND user.uid=$uid";
        
        //var_dump($sql);exit;
         $Model = new \Think\Model();// 实例化一个model对象 没有对应任何数据表
         $arr= $Model->query($sql);
         //var_dump($arr);
         $this->assign("list",$arr);
        $this->display();
     }
     public function cart(){
        $uid=1;
        $m=M("cart");
        $where["uid"]=$uid;
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
        $uid=1;
        $sql="Select goods.price as price,goods.g_name as name,user.uid as uid,goods.g_evaluate as evaluate,
              goods.gid as gid,goods.g_img as img,goods.sold as number
              from user JOIN goods JOIN collect_goods
              where collect_goods.gid=goods.gid AND collect_goods.uid=user.uid AND user.uid=$uid";
        
        //var_dump($sql);exit;
         $Model = new \Think\Model();// 实例化一个model对象 没有对应任何数据表
         $arr= $Model->query($sql);
         //var_dump($arr);
         $this->assign("list",$arr);
        
        $this->display();
     }
      public function collect2(){
        $uid=1;
        $sql="Select shop.s_address as address,shop.sname as name,user.uid as uid,shop.sid as sid,shop.s_img as img
              from user JOIN shop JOIN collect_shop
              where collect_shop.sid=shop.sid AND collect_shop.uid=user.uid AND user.uid=$uid";
        
        //var_dump($sql);exit;
         $Model = new \Think\Model();// 实例化一个model对象 没有对应任何数据表
         $arr= $Model->query($sql);
         //var_dump($arr);
         $this->assign("list",$arr);
        
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
     public function sold_goods(){
        $uid=1;
        $arr=I("post.");
        $t=I("post.t");
        //echo $t;
      //  echo $arr['t'];
       //var_dump($arr);
     //   echo $arr.length;
        //$arr=json_decode($arr['con']);
        for ($i=1; $i <= $t; $i=$i+2) { 
           $gid=$arr[$i+1];
           $number=$arr[$i];
           $this->sold_goods_do($uid,$gid,$number);
        }
       echo "success";
        exit;
      
     }
     public function sold_goods_do($uid,$gid,$number){
        // $uid=1;
        // $gid=1;
        // $number=1;
        $p=A("Commen");
        if($p->check("uid","user",$uid)=="success" && $p->check("gid","goods",$gid)=="success"){
            $data['uid']=$uid;
            $data['gid']=$gid;  
            $m=M("goodsorder");
            $str=$m->where($data)->find();
            if($str){
                $map['number']=$number+intval($str['number']);
                $m->where($data)->save($map);
               // echo "success";
            }else{
                $data['number']=$number;
                if($m->add($data)){
                      // echo "success";
               }else{
                 // echo "failure";
               }
            }
        }else{
          //  echo "failure";
        }
     }
}
