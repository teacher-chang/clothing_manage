<?php
namespace app\admin\controller;
use think\Controller;

class Order extends Controller{
    /**
     * 加载订单列表页
     * @return \think\response\View
     */
    public function index(){
        $con = '';
        if (request()->isPost()){
            $con = input('post.');
        }
        $data = model('Order')->getOrderInfo($con);
        return view('index',['data'=>$data]);
    }

    /**
     *删除订单
     */
    public function del(){
        $id = input('get.id');
        $res = model('Goods')->delGoods($id);
        if ($res){
            return $this->redirect('goods/index');
        }
    }

    /**
     * 修改发货状态
     * @return \think\response\View
     */
    public function status(){
        $status = input('get.status');
        $id = input('get.order_id');
        if ($status ==0){
            $res = model('Order')->updateStatus($id);
            if ($res){
                return redirect('order/index');
            }
        }

    }



}