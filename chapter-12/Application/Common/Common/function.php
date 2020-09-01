<?php

function getCategory($isNav = -1)
{
    $map = array();
    if($isNav > -1){
        $map['isNav'] = $isNav;
    }
    $model = new \Think\Model('Category');
    return $model->where($map)->order('sort DESC')->select();
}
