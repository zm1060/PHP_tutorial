<?php

function getLinks()
{
    return M('Link')->where(array('status'=> 1))->order('linkId DESC')->select();
}

return array(
	//'配置项'=>'配置值'
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_PORT' => 3306,
    'DB_USER' => 'root',
    'DB_PWD'  => 'DRsXT5ZJ6Oi55LPQ',
    'DB_NAME' => 'thinkphp_inaction',
    'DB_PREFIX'=> 'blog_',
    'DB_PARAMS' => array(
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ),
    'LAYOUT_ON' => true,

);