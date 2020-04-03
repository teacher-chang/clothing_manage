<?php
namespace app\admin\model;
use think\Db;
use think\Model;

class User extends Model{
    //用户列表页获取用户信息
    public function getUserInfo($con){
        $arr['user_id'] = ['>',0];
        if($con!=''){
            $arr['username'] =['=',$con['user']];
        }
        $data = Db::table('user')->where($arr)->order('user_id','desc')->select();
        return $data;
    }
    //删除用户
    public function delUser($id){
        $res = Db::table('user')->where('user_id',$id)->delete();
        return $res;
    }
    //用户编辑
    public function getOneUserInfo($id){
        $data = Db::table('user')->where('user_id',$id)->find();
        return $data;
    }

    public function updateUserInfo($data){
        $id = $data['user_id'];
        $arr = [
            'username' => $data['username'],
            'mobile' => $data['mobile']
        ];
        $res = Db::table('user')->where('user_id',$id)->update($arr);
        return $res;
    }
}