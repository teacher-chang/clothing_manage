<?php
namespace app\admin\controller;
use think\Controller;

class User extends Controller
{
    /**
     * 加载用户列表
     * @return \think\response\View
     */
    public function index(){
        $con='';
        if (request()->isPost()){
            $con = input('post.');
            print_r($con);
        }
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

    /**
     * 加载编辑页面
     * @return \think\response\View
     */
    public function edit(){
        $id = input('get.id');
        $data = model('User')->getOneUserInfo($id);
        return view('user/edit',['data'=>$data]);
    }


    public function update(){
        $data = input('post.');
//        print_r($data);
//        die();
        $res = model('User')->updateUserInfo($data);
//        print_r($res);

        if ($res){
            return redirect('user/index');
        }

    }



}