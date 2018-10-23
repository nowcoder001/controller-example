<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/10/23
 * Time: 下午10:20
 */

namespace app\index\controller;

/**
 * 新闻控制器
 * Class News
 *
 * @package app\index\controller
 */
class News
{
    /**
     * 查看新闻详情
     *
     * @param $id
     *
     * @return string
     */
    public function show($id)
    {
        return "当前查看ID为{$id}的新闻";
    }

    /**
     * 查看新闻详情（直接路由到控制器方法）
     *
     * @param $id
     *
     * @return string
     */
    public function read($id)
    {
        return "当前通过直接路由到控制器方法访问ID为{$id}的新闻";
    }

    /**
     * 路由到静态方法
     *
     * @param $id
     *
     * @return string
     */
    public static function showStatic($id)
    {
        return "当前通过路由到静态方法查看ID为{$id}的新闻";
    }
}