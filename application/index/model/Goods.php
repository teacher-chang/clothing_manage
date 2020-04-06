<?php
namespace app\index\model;
use think\Db;
use think\Model;

class Goods extends Model{
    /**
     * 新款商品
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getGoodsByTime(){
        $data = Db::table('goods')
            ->join('store','store.id=store_id')
            ->field('goods_id,goods_name,goods_price,sale_number,goods_img,store_name')
            ->order('goods.create_time','desc')
            ->limit(6)
            ->select();
        return $data;
    }

    /**
     * 热销商品
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getGoodsBySale(){
        $data = Db::table('goods')
            ->join('store','store.id=store_id')
            ->field('goods_id,goods_name,goods_price,sale_number,goods_img,store_name')
            ->order('sale_number','desc')
            ->limit(6)
            ->select();
        return $data;
    }

    public function getGoodsInfo($id){
        $data = Db::table('goods')->where('goods_id',$id)->find();
        return $data;
    }

}