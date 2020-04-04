<?php
/**
 * Created by PhpStorm.
 * User: changle
 * Date: 2020/3/28
 * Time: 10:02 PM
 */

namespace app\index\controller;
use think\Controller;
use think\Model;

class User extends Controller
{
    /**
     * 用户中心
     * @return \think\response\View
     */
    public function user_center(){
        $user_id = session('user_id');
        //获取用户账号信息
        $account_info = model('User')->getUserInfo($user_id);
        return view('user_center',['info'=>$account_info,'user_id'=>$user_id]);
    }

    public function edit(){
        $user_id = session('user_id');
        $data = model('User')->getUserInfo($user_id);
        return view('user/user_info',['data'=>$data,'user_id'=>$user_id]);
    }

}