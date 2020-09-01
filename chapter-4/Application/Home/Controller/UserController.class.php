<?php


namespace Home\Controller;
use Think\Controller;

class UserController extends Controller
{
    public function _empty($name)
    {
        $this->view($name);
    }
    public function view($name)
    {
        echo 'name:'.$name;
    }
}