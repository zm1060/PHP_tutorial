<?php


namespace Home\Controller;
use Think\Controller;

class EmptyController extends Controller
{
    public function index()
    {
        $name = CONTROLLER_NAME;
        $this->view($name);
    }

    private function view($name)
    {
        echo 'name:'.$name;
    }

}