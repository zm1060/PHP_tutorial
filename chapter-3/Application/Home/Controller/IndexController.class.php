<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo 1;
        echo "year:".$_GET['year'].", month:".$_GET['month'].", day:".$_GET['day'];
    }
}