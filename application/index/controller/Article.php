<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/10/23
 * Time: 下午10:56
 */

namespace app\index\controller;

/**
 * 文章控制器
 * Class Article
 *
 * @package app\index\controller
 */
class Article
{
    /**
     * 查看文章详情
     *
     * @param $id
     *
     * @return string
     */
    public function show($id)
    {
        return "当前通过分组路由查看ID为{$id}的文章";
    }

    /**
     * 编辑文章
     *
     * @param $id
     *
     * @return string
     */
    public function post($id)
    {
        return "当前通过分组路由编辑ID为{$id}的文章";
    }
}