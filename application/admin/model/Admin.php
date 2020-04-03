<?php
namespace app\admin\model;
use think\Db;
use think\Model;

class Admin extends Model{
    public function getAdmin($data){
        $arr = [
            'admin_name'=>$data['admin_name'],
            'admin_pwd'=>$data['admin_pwd']
        ];
        $res = Db::table('admin')->where($arr)->find();
        return $res;
    }
}