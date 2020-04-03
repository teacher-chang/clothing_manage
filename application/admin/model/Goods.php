<?php
namespace app\admin\model;
use think\Db;
use think\Model;

class Goods extends Model{
//    public function getGoodsInfo($con){
//        $arr['goods_id'] = ['>',0];
//        if ($con != ''){
//            $arr['goods_name'] = ['=',$con['goods_name']];
//        }
//        $data = Db::table('goods')->where($arr)->order('id','desc')->select();
//        return $data;
//    }
    public function delGoods($id){
        $res = Db::table('goods')->where('goods_id',$id)->delete();
        return $res;
    }
    //添加商品
    public function addGoods($goodsData){
        $res =Db::table('goods')->insert($goodsData);
        return $res;
    }
    public function getEdit($id){
        $data = Db::table('goods')->join('store','goods.store_id=store.id')
                                       ->field('goods.*,store.store_name')
                                       ->where('goods_id',$id)
                                       ->find();
        return $data;
    }
    public function updateGoodsInfo($data){
        $res = Db::table('goods')->where('goods_id',$data['goods_id'])->update([
            'goods_name' => $data['goods_name'],
            'goods_price' => $data['goods_price'],
            'goods_img' => $data['goods_img'],
            'goods_detail' => $data['goods_detail'],
            'goods_total' => $data['goods_total'],
            'store_id' =>$data['store_id']
        ]);
        return $res;
    }
    public function getGoodsStoreInfo($con){
        $arr['goods_id'] = ['>',0];
        if ($con != ''){
            $arr['goods_name'] = ['=',$con['name']];
        }
        $data = Db::table('goods')->join('store','goods.store_id=store.id')
                                       ->field('goods.*,store.store_name')
                                       ->where($arr)
                                       ->select();
        return $data;
    }
}