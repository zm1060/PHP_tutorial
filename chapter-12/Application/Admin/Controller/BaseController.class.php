<?php
namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller
{
    public function initialize(){
        if(session('admin.adminId')===null){
            $this->error('请登录',U('admin/index/login'));
        }
        C('LAYOUT NAME','admin');
    }

    public function index(){
        $model = new Model('Link');
        $count = $model->count();
        $page = new Page($count);
        $show = $page->show();
        $list = $model->order('linkId DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

}