<?php
namespace app\common\model;
use think\Db;
use think\Model;

class Store extends Model{
    public function getStoreInfo(){
        $data = Db::table('store')->order('id','desc')->select();
        return $data;
    }
    public function delStore($id){
        $res = Db::table('store')->where('id',$id)->delete();
        return $res;
    }
    public function addStore($storeData){
        $res =Db::table('store')->insert($storeData);
        return $res;
    }
    public function getEdit($id){
        $data = Db::table('store')->where('id',$id)->find();
        return $data;
    }
}