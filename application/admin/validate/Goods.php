<?php
namespace app\admin\validate;
use think\Validate;

class Goods extends Validate
{
    protected $rule =[
        ['goods_name','require|max:10'],
        ['goods_price','require'],
        ['goods_detail','require|max:50'],
        ['goods_total','require|number|min:1'],
    ];
    protected $scene = [
      'add' => ['goods_name','goods_price','goods_detail','goods_total']
    ];
}