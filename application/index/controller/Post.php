<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/10/23
 * Time: 下午10:45
 */

namespace app\index\controller;

/**
 * 博文控制器
 * Class Posts
 *
 * @package app\index\controller
 */
class Post
{
    /**
     * 查看博文列表
     *
     *
     * @param $user_id
     *
     * @return \think\response\Json
     */
    public function index($user_id)
    {
        return json([
            [
                'id' => 1,
                'title' => '标题1',
                'desc' => '简介1',
                'author' => $user_id
            ],
            [
                'id' => 2,
                'title' => '标题2',
                'desc' => '简介2',
                'author' => $user_id
            ],
        ]);
    }

    /**
     * 发表新博文
     *
     * @param $user_id
     *
     * @return \think\response\Json
     */
    public function save($user_id)
    {
        return json([
            'id' => 1,
            'title' => '标题1',
            'desc' => '简介1',
            'author' => $user_id
        ]);
    }

    /**
     * 查看博文
     *
     * @param $user_id
     * @param $id
     *
     * @return \think\response\Json
     */
    public function read($user_id, $id)
    {
        return json([
            'id' => $id,
            'title' => '标题1',
            'desc' => '简介1',
            'author' => $user_id
        ]);
    }

    /**
     * 编辑博文
     *
     * @param $user_id
     * @param $id
     *
     * @return \think\response\Json
     */
    public function update($user_id, $id)
    {
        return json([
            'id' => $id,
            'title' => '编辑成功',
            'desc' => '简介1',
            'author' => $user_id
        ]);
    }

    /**
     * 删除博文
     *
     * @param $user_id
     * @param $id
     *
     * @return \think\response\Json
     */
    public function delete($user_id, $id)
    {
        return json(null, 204);
    }

    /**
     * 4.10 页面缓存
     *
     * @param $id
     */
    public function show($id)
    {
        printf("现在时间:%s,访问ID:%d", date('Y-m-d H:i:s'), $id);
    }
}