<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

\think\Route::get('news/closure/:id', function ($id) {
    return "当前通过路由到闭包访问ID为{$id}的新闻";
});
return [
    'news/direct/:id' => '@index/news/read', // 3.4.3
    'news/static/:id' => 'app\index\controller\News::showStatic', // 3.4.4
    'news/old/:id' => '/news/:id', // 3.4.1
    'news/:id' => 'index/news/show', // 3.4.2

    '__rest__' => [
        'user' => 'index/user', // 3.5.1
        'user.post' => 'index/post' // 3.5.2
    ]
];
