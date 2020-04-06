<?php
/**
 * Created by PhpStorm.
 * User: changle
 * Date: 2020/3/25
 * Time: 9:03 PM
 */

namespace app\index\controller;


class Goods
{
    public function goods_detail(){
        $id = input('get.id');
        $data = model('goods')->getGoodsInfo($id);
        return view('goods_detail',['data'=>$data]);
    }
}