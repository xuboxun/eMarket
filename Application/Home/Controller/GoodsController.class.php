<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function classa(){
        $this->show();
    }
    public function classb(){
        $this->show();
    }
    public function detail(){
        $this->show();
    }
    public function index(){
     
    }
     //添加商品
     public function create_goods(){
     	     $data['sid']=1;
           $d=M("shop");
           $str=$d->where($data)->find();
           if($str){
                  $data['g_name']="苹果";
                  $data['g_img']="b.jpg";
                  $data['price']="55元/斤";
                  $data['count']="55";
                  $data['g_classa']="瓜果蔬菜";
                  $data["g_classb"]="鲜果";
                  $data['g_evaluate']="33%";
                  $data['sold']="3333";
                  $m=M("goods");
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