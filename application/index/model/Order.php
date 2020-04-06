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

    /**
     * 已发货数量
     * @param $user_id
     * @return int|string
     */
    public function getStatus($user_id){
        $where['ship_status'] = 1;
        $where['user_id'] = $user_id;
        $num = Db::table('order')->where($where)->count();
        return $num;
    }

    /**
     * 待发货数量
     * @param $user_id
     * @return int|string
     */
    public function getNoStatus($user_id){
        $where['ship_status'] = 0;
        $where['user_id'] = $user_id;
        $num = Db::table('order')->where($where)->count();
        return $num;
    }
    public function newOrder($user_id,$data,$order_sn){
        $store_id = Db::table('goods')
            ->field('store_id')
            ->where('goods_id',$data['goods_id'])
            ->find();
        $arr = [
            'user_id' => $user_id,
            'order_sn' => $order_sn,
            'consignee' => $data['username'],
            'consignee_mobile' => $data['mobile'],
            'goods_id' => $data['goods_id'],
            'ship_status' => 0,
            'store_id' => $store_id['store_id'],
            'address' => $data['address']
        ];
        //更新销量与库存数
        $sale_number = Db::table('goods')
            ->field('sale_number')
            ->where('goods_id',$data['goods_id'])
            ->find();
        $inventory = Db::table('goods')
            ->field('inventory')
            ->where('goods_id',$data['goods_id'])
            ->find();
        $num = ['sale_number'=>$sale_number['sale_number']+1,'inventory'=>$inventory['inventory']-1];
        Db::table('goods')
            ->where('goods_id',$data['goods_id'])
            ->update($num);
        $res = Db::table('order')->insert($arr);
        return $res;
    }
}