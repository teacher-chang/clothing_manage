<?php
namespace app\admin\controller;


class Index
{
    //加载登录页面
    public function login(){
        //判断是否为post方式提交
        if (request()->isPost()){
            //获取登录信息
            $data = input('post');
            //登录信息格式校验
            $validate = view('');

        }
        return view('login');
    }

//    此方法为加载主页面
    public function index(){
        return view('index');

    }
}