<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/10/24
 * Time: 下午11:17
 */

namespace app\index\controller;

use think\Controller;

/**
 * Class Req
 *
 * @package app\index\controller
 */
class Req extends Controller
{
    /**
     * 4.7
     * 获取请求详情
     */
    public function index()
    {
        config('default_return_type', 'json');
        $request = request();
        return [
            'module' => $request->module(),
            'controller' => $request->controller(),
            'action' => $request->action(),
            'headers' => $request->header(),
        ];
    }

    /**
     * 写入session
     */
    public function login()
    {
        session('username', 'xialei');
        $this->redirect('input');
    }

    /**
     * 4.8
     * 获取输入数据
     */
    public function input()
    {
        config('default_return_type', 'json');
        $request = request();
        return [
            'name' => $request->param('name'),
            'get' => $request->get('get'),
            'session' => $request->session('username'),
            'server' => $request->server('SERVER_SOFTWARE'),
            'env' => $request->env('PATH')
        ];
    }

    /**
     * 4.8.1 过滤函数
     */
    public function filter()
    {
        $request = request();
        $name = $request->get('data', '', 'trim');
        dump($name);
    }

    /**
     * 4.8.2 获取部分数据
     *
     * @return mixed
     */
    public function only()
    {
        config('default_return_type', 'json');
        $request = request();
        return $request->only(['id', 'name']);
    }

    /**
     * 4.8.3 排除部分数据
     */
    public function except()
    {
        config('default_return_type', 'json');
        $request = request();
        return $request->except(['id']);
    }

    /**
     * 4.8.4 数据类型转换
     */
    public function transfer()
    {
        $request = request();
        $str = $request->param('str/s');
        $number = $request->param('age/d');
        $bool = $request->param('bool/b');
        $float = $request->param('float/f');
        $array = $request->param('array/a');
        var_dump($str, $number, $bool, $float, $array);
    }

    /**
     * 4.9 参数绑定
     *
     * @param $id
     * @param $id2
     */
    public function parambind($id, $id2)
    {
        var_dump($id, $id2);
    }
}