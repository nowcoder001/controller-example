<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/10/24
 * Time: 下午10:52
 */

namespace app\index\controller;

use think\Controller;

/**
 * 4.4
 * Class Action
 *
 * @package app\index\controller
 */
class Action extends Controller
{
    public $beforeActionList
        = [
            'method1',
            'method2' => ['except' => 'action1'],
            'method3' => ['only' => 'action2']
        ];

    public function _initialize()
    {
        echo '我是初始化操作<br>';
    }

    public function method1()
    {
        echo '我每次都执行<br>';
    }

    public function method2()
    {
        echo '只要不是action1我就执行<br>';
    }

    public function method3()
    {
        echo '只有action2我才执行<br>';
    }

    public function action1()
    {
        echo '我是action1<br>';
    }

    public function action2()
    {
        echo '我是action2<br>';
    }
}