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

    /**
     * 个人信息编辑页面
     * @return \think\response\View
     */
    public function edit(){
        $user_id = session('user_id');
        $data = model('User')->getUserInfo($user_id);
        return view('user/user_info',['data'=>$data,'user_id'=>$user_id]);
    }

    /**
     * 个人信息编辑页面的数据更新
     * @return \think\response\Redirect|\think\response\View
     */
    public function save(){
        $user_id = session('user_id');
        // 接收表单传值
        $data = input('post.');
        $result = model('User')->updateUserInfo($user_id,$data);
        if ($result){
            return redirect('user_center');
        }
        return view('user_info');
    }

}