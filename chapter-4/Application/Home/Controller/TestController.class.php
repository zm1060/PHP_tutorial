<?php
/**
 * TestController.class.php
 */

namespace Home\Controller;
use Think\Controller;

class TestController extends Controller
{
    public function testAction()
    {
        echo "您访问了home/test/test";
    }

    public function listAction()
    {
        echo '<li>我是一个列表</li>';
    }

}