<?php
/*
  Shop模块

*/
namespace Home\Controller;
use Think\Controller;
class ShopController extends Controller {
    public function create(){
        $this->display();
     }
     //添加店铺
     public function create_shop(){
           $data['bid']=2;
           $d=M("business");
           $str=$d->where($data)->find();
           if($str){
                  $data['s_address']="华中农业大学";
                  $data['s_img']="b.jpg";
                  $data['sname']="b号店";
                  $m=M("shop");
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