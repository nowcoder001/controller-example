<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/10/24
 * Time: 下午11:03
 */

namespace app\index\controller;

use think\Controller;

/**
 * 4.5
 * Class Redirect
 *
 * @package app\index\controller
 */
class Redirect extends Controller
{
    public function jump()
    {
        $this->success('我将jump到官网', 'http://thinkphp.cn');
    }

    /**
     * 直接302重定向
     */
    public function redi()
    {
        $this->redirect('http://thinkphp.cn');
    }
}