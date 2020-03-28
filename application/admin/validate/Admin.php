<?php
namespace app\admin\validate;
use think\Validate;

class Admin extends Validate
{
    protected $rule =[
        ['admin_name','require|max:25'],
        ['admin_pwd','require|min:8'],
    ];
    protected $scene = [
      'login' => ['admin_name','admin_pwd']
    ];
}