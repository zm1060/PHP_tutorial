<?php
return array(
	//'配置项'=>'配置值'
    'URL_ROUTE_RULES' => array(
        '/^posts\/(\d{4})\/(\d{2})\/(\d{2})$/' => 'Index/index?year=:1&month=:2&day=1',
        'posts/:year/:month/:day' => 'Index/index',
        'posts/:id' => 'Index/index',
        'posts/read/:id' => '/posts/:1',
    ),
);