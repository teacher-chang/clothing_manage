<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    /**
     * 商城首页
     * @return \think\response\View
     */
    public function index()
    {
        $user_id = session('user_id');
        $newData = model('Goods')->getGoodsByTime();
        $hotData = model('Goods')->getGoodsBySale();
        return view('index',[
            'user_id'=>$user_id,
            'new'=>$newData,
            'hot'=>$hotData
        ]);
    }

    /**
     * 用户登录
     * @return \think\response\Redirect|\think\response\View
     */
    public function login(){
        $data = input('post.');
        if($data){
            $res = model('User')->login($data);
            if($res){
                //登录成功后将用户id保存到session 中
                session('user_id',$res['user_id']);
                return redirect('index/index');
            }else{
                return view('login',['flag'=>1]);
            }
        }
        return view('login',['flag'=>0]);
    }

    /**
     * 用户注册
     * @return \think\response\Redirect|\think\response\View
     */
    public function regist(){
        $data = input('post.');
        print_r($data);
        if($data){
            $res = model('User')->regist($data);
            if($res){
                return redirect('index/login');
            }
        }
        return view('regist');
    }

    public function logout(){
        return redirect('index/index');
    }

}
