<?php
namespace app\index\model;
use think\Db;
use think\Model;

class Goods extends Model{
    public function getGoodsByTime(){
        $data = Db::table('goods')->field('goods_name,goods_price,sale_number,goods_img')
                                       ->order('create_time','desc')
                                       ->limit(6)
                                       ->select();
        return $data;
    }
    public function getGoodsBySale(){
        $data = Db::table('goods')->field('goods_name,goods_price,sale_number,goods_img')
                                       ->order('sale_number','desc')
                                       ->limit(6)
                                       ->select();
        return $data;
    }

}