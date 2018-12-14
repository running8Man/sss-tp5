<?php
/**
 * Created by PhpStorm.
 * User: sss
 * Date: 2018/12/14
 * Time: 9:05
 */

namespace app\common\controller;


use think\Controller;

class BaseController extends Controller
{


    protected function initialize()
    {
        $this->initRequestInfo();
    }

    /**
     * 请求信息初始化
     */
    final private function initRequestInfo(){
        defined('IS_GET') || define('IS_GET',$this->request->isGet());
        defined('IS_POST') || define('IS_POST',$this->request->isPost());
        defined('IS_AJAX') || define('IS_AJAX',$this->request->isAjax());
        defined('MODULE_NAME')      || define('MODULE_NAME',     strtolower($this->request->module()));
        defined('CONTROLLER_NAME')  || define('CONTROLLER_NAME', strtolower($this->request->controller()));
        defined('ACTION_NAME')      || define('ACTION_NAME',     strtolower($this->request->action()));
    }

}