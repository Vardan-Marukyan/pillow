<?php


return [
    'catalog'=>'catalog/index',
    'category/([1-9]+)'=>'category/index/$1',
    'type/([1-9]+)'=>'type/index/$1',
    'product/([1-9]+)'=>'product/view/$1',
    'about'=>'about/index',
    'user/signup'=>'user/signup',
    'user/login'=>'user/login',
    'user/logout'=>'user/logout',
    'cart'=>'cart/index',
    'catalog/more' => 'catalog/more',
    'catalog/search' => 'catalog/search',
    'product/ajaxAdd/([1-9]+)' => 'product/ajaxAdd',
    'blog' => 'blog/index',
    ''=>"main/index"
];