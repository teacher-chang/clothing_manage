<?php
namespace app\index\model;
use think\Db;
use think\Model;

class Order extends Model{
    /**
     * 订单详情页
     * @param $user_id
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getOrderInfo($user_id){
        $join = [
            ['goods','goods.goods_id=order.goods_id'],
            ['user','user.user_id=order.user_id'],
            ['store','store.id=order.store_id']
        ];
        $field ='order.*,
                goods.goods_name,
                goods.goods_price,
                goods.goods_img,
                user.username,
                store.store_name';
        $data = Db::table('order')
              ->join($join)
              ->field($field)
              ->where('user.user_id',$user_id)
              ->order('order.create_time','desc')
              ->select();
        return $data;
    }

    public function getStatus($user_id){
        $where['ship_status'] = 1;
        $where['user_id'] = $user_id;
        $num = Db::table('order')->where($where)->count();
        return $num;
    }
    public function getNoStatus($user_id){
        $where['ship_status'] = 0;
        $where['user_id'] = $user_id;
        $num = Db::table('order')->where($where)->count();
        return $num;
    }
}