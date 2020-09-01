<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {
    public function index()
    {
        $val = 'name';

        $array1 = [
            'name' => 'admin'
        ];

        $array2 = [
            ['name' => 'admin'],
            ['name' => 'admin2'],
        ];

        $obj = new \stdClass();
        $obj->name = 'admin';

        $this->assign('val',$val);
        $this->assign('array1',$array1);
        $this->assign('array2',$array2);
        $this->assign('obj',$obj);
        $this->display();
    }

    //测试URL http://localhost/chapter-7/index.php/home/index/view1?name=test
    public function view1()
    {
        $this->display();
    }
    public function viwe2()
    {
        $this->assign('name','test');
        $this->assign('now',time());
        $this->display();
    }

    public function view3()
    {
        $user = array(
            'nickname' => 'Guest',
            'mark' => ''
        );

        $this->assign('user',$user);
        $this->display();
    }

    public function view4()
    {
        $userArray = array(
            'age' => 100
        );

        $userObj = new \stdClass();
        $userObj->age = 100;
        $this->assign('userArray',$userArray);
        $this->assign('userObj',$userObj);
        $this->display();
    }

    public function view5()
    {
        $this->display();
    }

    public function view6()
    {

        $role = 1;
        $this->assign('role',$role);
        $this->display();
    }

}