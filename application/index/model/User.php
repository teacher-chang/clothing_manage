<?php
/**
 * Created by PhpStorm.
 * User: changle
 * Date: 2020/3/28
 * Time: 6:38 PM
 */

namespace app\index\model;


use think\Db;
use think\Model;

/**
 * 移动端用户相关model
 * Class User
 * @package app\common\model\index
 */
class User extends Model
{
    /**
     * 用户登录校验
     * @param $data
     * @return array|false|\PDOStatement|string|Model
     */
    public function login($data){
        $res = Db::table('user')->where(['username'=>$data['username'],'user_pwd'=>$data['user_pwd']])->find();
        return $res;
    }

    /**
     * 移动端用户注册
     * @param $data
     * @return int|string
     */
    public function regist($data){
        $arr = [
            'username'=>$data['username'],
            'user_pwd'=>$data['user_pwd'],
            'mobile'=>$data['mobile']
        ];
        $res = Db::table('user')->insert($arr);
        return $res;
    }

    /**
     * 用户中心，获取用户个人信息
     * @param $user_id
     * @return array|false|\PDOStatement|string|Model
     */
    public function getUserInfo($user_id){
        $res = Db::table('user')->where('user_id',$user_id)->find();
        return $res;
    }
}