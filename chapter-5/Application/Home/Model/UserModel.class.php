<?php

namespace Home\Model;
use Think\Model;

class UserModel extends Model
{
    private $denyUsername = array(
        'admin',
        'adminstrator'
    );
    public $_validate = array(
        array('username','require','用户名不能为空'),
        array('password','require','密码不能为空',1,'',1),
        array('username','','用户名已存在',0,'unique',1),
        array('password','6,20','密码长度必须在6-20',0,'length'),
        array('password','/^\w{6,20}$/','密码格式错误'),
        array('password','repassword','确认密码错误',0,'confirm',1),
        array('username','checkUsername','用户名非法',0,'callback')
    );

    public function checkUsername($username)
    {
        foreach ($this->denyUsername as $u)
        {
            if(strpos($username, $u) !== false)
            {
                return false;
            }
        }
        return true;
    }

    public  function read()
    {
        $user = new Model('User');
        $data = $user->query('SELECT * FROM c5_user');
        print_r($data);
    }
}