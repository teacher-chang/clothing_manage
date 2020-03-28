<?php
namespace app\admin\controller;
use think\Controller;

class User extends Controller
{
    public function index(){
        $con='';
        if (request()->isPost()){
            $con = input('post.');
        }
        print_r($con);
        // 从用户表中取数据
        $data = model('User')->getUserInfo($con);
        return view('index', ['data'=> $data]);
    }

    public function del(){
        // 根据id接收数据
        $id = input('get.id');
        $res = model('User')->delUser($id);
        if ($res){
            return $this->redirect('user/index');
        }

    }


}