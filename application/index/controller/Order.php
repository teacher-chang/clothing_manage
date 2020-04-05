<?php
namespace app\index\controller;
use think\Controller;

class Order extends Controller
{
   public function orderInfo(){
        $user_id = session('user_id');
        $data = model('order')->getOrderInfo($user_id);
        $shipped_num = model('order')->getStatus($user_id);
        $no_num = model('order')->getNoStatus($user_id);
        return view('order/order_info',[
            'data' => $data,
            'shipped_num'=>$shipped_num,
            'no_num'=>$no_num
        ]);
   }
}