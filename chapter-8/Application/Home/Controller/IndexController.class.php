<?php
namespace Home\Controller;
use Think\Controller;
use Think\Log;
use Think\Upload;
use Think\Verify;

class IndexController extends Controller
{
    public function index()
    {
        $a = $_GET['a'];
        if (empty($a)) {
            E('参数a错误!!!');
        }
    }

    public function log()
    {
        Log::record('ERR - record', Log::ERR);
        Log::write('INFO - write', Log::INFO);
        Log::record('INFO - record', Log::INFO);
    }

    public function dump()
    {
        $a = [
            'username' => 'admin',
            'age' => 100
        ];
        dump($a);
    }

    public function profile()
    {
        G('start');
        $sum = 0;
        for ($i = 0; $i < 1000000; $i++) {
            $sum += $i;
        }
        G('end');
        echo G('start', 'end') . '秒<br>';
        echo G('start', 'end', 'm') . 'KB';
    }

    public function db()
    {
        $m = M('Post');
        $count = $m->count();
        $Page = new \Think\Page($count,2);
        $show = $Page->show();
        $list = $m->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
        $list = $m->select();
        dump($list);
        echo $m->getLastSql();
    }

    public function upload(){
        $this->display();
    }

    public function upload_do(){
        $upload = new Upload();
        $upload->maxSize = 1024*1024*2;
        $upload->exts = array('jpg','gif','png','jpeg');
        $upload->rootPath = './Uploads/';
        $upload->savePath = '';
        $info = $upload->upload();
        if(!$info){
            $this->error($upload->getError());
        }else{
            $baseURL = 'Uploads/'.$info['file']['savepath'].$info['file']['savename'];
            echo $baseURL;
        }
    }

    public function writetocache(){
        $user = 'admin';
        $pawd = 'admin';
        S('user',$user,300);
        S('pawd',$pawd,300);

        $temp = S('user');
        echo $temp;
        $temp = S('pawd');
        echo $temp;
    }

    public function testcookie(){
        cookie('name','value',7*24*3600);
        $val = cookie('name');
        echo $val;
        echo '<br>';
        $cookies = cookie();
        echo $cookies;
    }

    public function vertify(){
        $vertify = new Verify();
        $vertify->entry();
    }

    public function login(){
        $this->display();
    }

    public function login_do(){
        $code = I('code');
        $vertify = new Verify();
        if($vertify->check($code)){
            $this->success('验证成功');
        }else{
            $this->error('验证码错误');
        }
    }
}