<?php
namespace app\admin\controller;
use think\Controller;

class Store extends Controller{
    // 加载店铺列表页
    public function index(){
        $data =  model('Store')->getStoreInfo();
        return view('index',['data'=>$data]);
    }
    // 加载添加店铺页面
    public function add(){
        return view('store/add');
    }
    //添加店铺功能
    public function save(){
        // 接收数据
        $data = input('post.');
        $validate = validate('Store');
        //数据格式校验
        if (!$validate->scene('add')->check($data)){
            return view('store/add');
        }
        $storeData = [
            'store_name' => $data['store_name'],
            'store_manage' => $data['store_manage'],
            'manage_mobile' => $data['manage_mobile'],
            'store_address' => $data['store_address']
        ];
        $res = model('Store')->addStore($storeData);
        if ($res){
            return redirect('Store/index');
        }
    }
    // 删除
    public function del(){
        $id = input('get.id');
        $res = model('Store')->delStore($id);
        if ($res){
            return $this->redirect('store/index');
        }
    }

    //编辑
    public function edit(){
        $id = input('get.id');
        $data = model('Store')->getEdit($id);
        return view('Store/edit',['data'=>$data]);
    }


}