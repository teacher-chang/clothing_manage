<?php
namespace app\admin\controller;
use think\Controller;

class Goods extends Controller{
    // 加载商品列表页
    public function index(){
        // 获取商品信息
        $data = model('Goods')->getGoodsStoreInfo();
        return view('index',['data'=>$data]);
    }
    //加载商品添加页
    public function add(){
        //获取店铺信息，选择门店
        $data = model('Store')->getStoreInfo();
        return view('add',['data'=>$data]);
    }
    // 添加保存数据
    public function save(){
        // 接收数据
        $data = input('post.');
        $validate = validate('Goods');
        //数据格式校验
        if (!$validate->scene('add')->check($data)){
            return view('store/add');
        }
        $goodsData = [
            'goods_name' => $data['goods_name'],
            'goods_price' => $data['goods_price'],
            'goods_detail' => $data['goods_detail'],
            'goods_total' => $data['goods_total'],
            'sale_number' => 0,
            'inventory' => $data['goods_total'],
            'store_id' => $data['store_id']
        ];
        $res = model('Goods')->addGoods($goodsData);
        if ($res){
            return redirect('Goods/index');
        }
    }
    // 删除
    public function del(){
        $id = input('get.id');
        $res = model('Goods')->delGoods($id);
        if ($res){
            return $this->redirect('goods/index');
        }
    }

    //编辑页面
    public function edit(){
        $id = input('get.id');
        $data = model('Goods')->getEdit($id);
        $store = model('Store')->getStoreInfo();
        return view('Goods/edit',['data'=>$data,'store'=>$store]);
    }
    //编辑页面修改数据保存
    public function update(){
        $data = input('post.');
        $res = model('Goods')->updateGoodsinfo($data);

        if ($res){
            // 返回结果为真，修改成功，重定向到列表页
            return redirect('goods/index');
        }

    }

}