<?php
namespace app\admin\controller;
use think\Controller;

class User extends Controller
{
    public function index(){
        return view('index');
    }

    public function add(){
        return view('add');
    }
}