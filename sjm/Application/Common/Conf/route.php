<?php
return array(
    'URL_ROUTER_ON'   => true,      // 开启路由
    'URL_MODEL'=>2,
    'URL_ROUTE_RULES'=>array(
        '/^goods\-(\d+)$/' => 'Goods/goodsInfo?id=:1',
        '/^list\-(\d+)$/' => 'Goods/goodsList?id=:1',
        '/^list\-(\d+)\-(\d+)\-(\w+)\-(\w+)\-(\w+)$/' => 'Goods/goodsList?id=:1&brand_id=:2&spec=:3&attr=:4&price=:5',

//        '/^developer_(\w+)$/' => 'Doc/Index/index?developer=:1',
//        'manual_list'=>'Doc/Index/manual_list',
//        'download'=>'Index/Index/download',
//        'product'=>'Index/Index/product',
//
//        'articleList'=>'Index/Article/articleList',
//        '/^articleList_cat_id_(\d+)$/'=>'Index/Article/articleList?cat_id=:1',
//        '/^article_id_(\d+)$/'=>'Index/Article/detail?article_id=:1',
    ),
);
