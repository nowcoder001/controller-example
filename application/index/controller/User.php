<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/10/23
 * Time: 下午10:33
 */

namespace app\index\controller;

use think\exception\HttpException;

/**
 * 用户模块
 * Class User
 *
 * @package app\index\controller
 */
class User
{
    private $users
        = [
            ['id' => 1, 'username' => 'zhangsan'],
            ['id' => 2, 'username' => 'lisi'],
            ['id' => 3, 'username' => 'wangwu'],
            ['id' => 4, 'username' => 'zhaoliu']
        ];

    /**
     * 访问用户列表
     *
     * @return \think\response\Json
     */
    public function index()
    {
        return json($this->users);
    }

    /**
     * 创建用户
     */
    public function save()
    {
        return json([
            'id' => 5,
            'username' => 'someone',
        ]);
    }

    /**
     * 查看一个用户
     *
     * @param $id
     *
     * @return \think\response\Json
     */
    public function read($id)
    {
        foreach ($this->users as $user) {
            if ($user['id'] == $id) {
                return json($user);
            }
        }
        return json(['errmsg' => '用户不存在', 'errcode' => 404], 404);
    }

    /**
     * 编辑用户
     *
     * @param $id
     *
     * @return \think\response\Json
     */
    public function update($id)
    {
        foreach ($this->users as $user) {
            if ($user['id'] == $id) {
                $user['username'] = '编辑成功';
                return json($user);
            }
        }
        return json(['errmsg' => '用户不存在', 'errcode' => 404], 404);
    }

    /**
     * 删除数据
     *
     * @param $id
     *
     * @return \think\response\Json
     */
    public function delete($id)
    {
        foreach ($this->users as $user) {
            if ($user['id'] == $id) {
                // 模拟删除
                return json(null, 204);
            }
        }
        return json(['errmsg' => '用户不存在', 'errcode' => 404], 404);

    }
}