<?php
namespace app\index\controller;
use think\Controller;

class Order extends Controller
{
   public function orderInfo(){
        return view('order/order_info');
   }

   public function orderConfirm(){
       return view('order/order_confirm');
   }
}