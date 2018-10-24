<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/10/24
 * Time: 下午10:50
 */

namespace app\index\controller;

/**
 * 4.3 配置响应格式示例
 * Class Ajax
 *
 * @package app\index\controller
 */
class Ajax
{
    /**
     * 直接返回数组将提示错误
     *
     * @return array
     */
    public function wrongdata()
    {
        return ['errmsg' => 'ok'];
    }

    /**
     * 先设置返回数据格式，再返回数组，不报错
     *
     * @return array
     */
    public function rightdata()
    {
        config('default_return_type', 'json');
        return ['errmsg' => 'ok'];
    }
}