<?php
namespace app\admin\validate;
use think\Validate;

class Store extends Validate
{
    protected $rule =[
        ['store_name','require|max:10'],
        ['store_manage','require|max:10'],
        ['manage_mobile','require|number'],
        ['store_address','require|max:50']
    ];
    protected $scene = [
      'add' => ['store_name','store_manage','manage_mobile','store_address']
    ];
}