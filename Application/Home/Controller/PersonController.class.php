<?php
namespace Home\Controller;
use Think\Controller;
class PersonController extends Controller {
     //判断是否已登录
    public function _initialize(){
         if($_SESSION['username']){
            
        }else{
           $this->redirect("Login/login");
        }
    }
    
    public function bought(){
       $uid=$_SESSION['uid'];
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
       
           $uid=$_SESSION['uid'];
      
        
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
        $uid=$_SESSION['uid'];
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
        $uid=$_SESSION['uid'];
        // $sql="Select shop.s_address as address,shop.sname as name,user.uid as uid,shop.sid as sid,shop.s_img as img
        //       goods.gid as gid
        //       from user JOIN shop JOIN collect_shop JOIN goods
        //       where collect_shop.sid=shop.sid AND collect_shop.uid=user.uid AND user.uid=$uid AND goods.sid=shop.sid";
        $sql="select * from goods,
             (Select shop.s_address as address,shop.sname as name,user.uid as uid,shop.sid as sid,shop.s_img as img
              from user JOIN shop JOIN collect_shop
              where collect_shop.sid=shop.sid AND collect_shop.uid=user.uid AND user.uid=$uid) as newtable
          where  goods.sid=newtable.sid";
        //var_dump($sql);exit;
         $Model = new \Think\Model();// 实例化一个model对象 没有对应任何数据表
         $arr= $Model->query($sql);
         var_dump($arr);
         $this->assign("list",$arr);
        
        $this->display();
     }
     public function setting(){
        $m=M("user");
        $where['uid']=$_SESSION['uid'];
        $str=$m->where($where)->find();
        if($str){
            if($str['address']&&$str['nickname']){
               // var_dump($str);
                $this->assign("list",$str);
            }else{
                $this->assign("list",0);
            }
        }else{
            $this->assign("list",0);
        }
        $this->display();
     }
     //在收藏夹添加购物车
     public function add_delete_collect(){
        $uid=$_SESSION['uid'];
        $gid=I("post.id");
        $this->delete_collect($uid,$gid);
        $this->add_cart($uid,$gid);
     }
     //在收藏夹取消关注
     public function collect_delete(){
        $uid=$_SESSION['uid'];
        $gid=I("post.id");
        if($this->delete_collect($uid,$gid)==1){
            echo "success";
        }else{
            echo "failure";
        }
     }
     //添加购物车
     public function add_cart($uid,$gid){
        $p=A("Commen");
        if($p->check("uid","user",$uid)=="success" && $p->check("gid","goods",$gid)=="success"){
            $data['uid']=$uid;
            $data['gid']=$gid;
            $m=M("cart");
            $str=$m->where($data)->find();
            if($str){
                echo "success";
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
     //购物车删除单件商品
     public function delete_cart_all(){
        $uid=$_SESSION['uid'];
        $arr=I('post.');
        $num=I("post.num");
        for($i=0;$i<$num;$i++){
            $gid=$arr[$i];
            $this->delete_cart_do($uid,$gid);
        }
        echo "success";
        // if($this->delete_cart_do($uid,$gid)==1){
        //     echo "success";
        // }else{
        //     echo "failure";
        // }
     }
     //购物车删除多件商品
      public function delete_cart_one(){
        $uid=$_SESSION['uid'];
        $gid=I("post.id");
        if($this->delete_cart_do($uid,$gid)==1){
            echo "success";
        }else{
            echo "failure";
        }
     }
     //从购物车删除
     public function delete_cart_do($uid,$gid){
        $p=A("Commen");
        if($p->check("uid","user",$uid)=="success" && $p->check("gid","goods",$gid)=="success"){
            $data['uid']=$uid;
            $data['gid']=$gid;
            $m=M("cart");
            $str=$m->where($data)->delete();
            return 1;
        }else{
            return 0;
        }
     }
     //取消关注
       public function delete_collect($uid,$gid){
        $p=A("Commen");
        if($p->check("uid","user",$uid)=="success" && $p->check("gid","goods",$gid)=="success"){
            $data['uid']=$uid;
            $data['gid']=$gid;
            $m=M("collect_goods");
            $str=$m->where($data)->delete();
            return 1;
        }else{
            return 0;
        }
     }
     //交易购买
     public function sold_goods(){
         $uid=$_SESSION['uid'];
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
     //添加收货地址
     public function add_address(){
         $uid=$_SESSION['uid'];
         $arr=I("post.");
         $where['uid']=$uid;
         $m=M("user");
         $m->where($where)->save($arr);
         echo "seccess";
     }
     //删除收货地址
     public function delete_address(){
        $where['uid']=$_SESSION['uid'];
        $data['address']="";
        $data['nickname']="";
        $m=M("user");
        $m->where($where)->save($data);
        echo "success";
     }
}
