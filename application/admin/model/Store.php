<?php
namespace app\admin\model;
use think\Db;
use think\Model;

class Store extends Model{
    //店铺列表页获取店铺数据
    public function getStoreInfo($con){
        $arr['id'] = ['>',0];
        if ($con != ''){
            $arr['store_name'] = ['=',$con['name']];
        }
        $data = Db::table('store')->where($arr)->order('id','desc')->select();
        return $data;
    }
    //删除店铺
    public function delStore($id){
        $res = Db::table('store')->where('id',$id)->delete();
        return $res;
    }
    //添加店铺数据
    public function addStore($storeData){
        $res =Db::table('store')->insert($storeData);
        return $res;
    }
    //获取编辑页面对应数据
    public function getEdit($id){
        $data = Db::table('store')->where('id',$id)->find();
        return $data;
    }
    // 更新数据
    public function updateStoreInfo($data){
        $res = Db::table('store')->where('id',$data['id'])->update([
            'store_name' => $data['store_name'],
            'store_manage' => $data['store_manage'],
            'manage_mobile' => $data['manage_mobile'],
            'store_address' => $data['store_address'],
        ]);
        return $res;
    }
}