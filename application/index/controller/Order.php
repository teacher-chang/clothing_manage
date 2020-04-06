<?php
namespace app\index\controller;
use think\Controller;

class Order extends Controller
{
    /**
     * 订单详情页
     * @return \think\response\View
     */
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

    /**
     * 订单确认页
     * @return \think\response\Redirect|\think\response\View
     */
   public function orderConfirm(){
       $user_id = session('user_id');
       $id = input('get.id');
       $data = model('goods')->getGoodsInfo($id);
       if(empty($user_id)){
           return redirect('index/login');
       }
       return view('order/order_confirm',['data'=>$data]);
   }


   public function saveOrder(){
        $user_id = session('user_id');
        $data = input('post.');
        // 生成订单号
        $order_sn = 'sn'.date('Ymd').mt_rand(1000,9999);
        $result = model('order')->newOrder($user_id,$data,$order_sn);
        if ($result){
            return redirect('order/orderInfo');
        }
   }
}