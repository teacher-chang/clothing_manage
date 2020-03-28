<?php
namespace app\common\model;
use think\Db;
use think\Model;

class User extends Model{
    public function getUserInfo($con){
        $data = Db::table('user')->where($con)->order('user_id','desc')->select();
        return $data;
    }
    public function delUser($id){
        $res = Db::table('user')->where('user_id',$id)->delete();
        return $res;
    }
}