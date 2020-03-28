<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    //加载登录页面
    public function login(){
        //判断是否为post方式提交
        if (request()->isPost()){
            //获取登录信息
            $data = input('post.');
            //登录信息校验
            $res = model('Admin')->getAdmin($data);
            if (!$res){
                return view('index/login',['flag'=>1]);
            }
            // 登录成功跳转到主页
            return view('index/index');
        }
        return view('login',['flag'=>0]);
    }
//    此方法为加载主页面
    public function index(){
        return view('index');

    }
    //退出
    public function logout(){
        return view('login',['flag'=>0]);
    }


}