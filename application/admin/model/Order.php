<?php
namespace app\admin\model;
use think\Db;
use think\Model;

class Order extends Model{
    /**
     * 订单列表页获取订单数据
     * @return false|\PDOStatement|string|\think\Collection
     */
    public function getOrderInfo($con){
        $arr['order_id'] = ['>',0];
        if ($con != ''){
            $arr['order_sn'] = ['=',$con['order_sn']];
        }
        $data = Db::table('order')->where($arr)->order('order_id','desc')->select();
        return $data;
    }
    /**
     * 删除订单
     * @param $id
     * @return int
     */
    public function delOrder($id){
        $res = Db::table('order')->where('_id',$id)->delete();
        return $res;
    }

    /**
     * 修改发货状态
     * @param $id
     * @return int|string
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function updateStatus($id){
        $res = Db::table('order')->where('order_id',$id)->update(['ship_status'=>1]);
        return $res;
    }

}