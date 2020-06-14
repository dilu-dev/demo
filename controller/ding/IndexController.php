<?php
// +-------------------------------------------------------------------------------
// | DiLu [ A Rapid Development Framework For Enterprise ]
// +-------------------------------------------------------------------------------
// | IndexController.php v1.0
// |
// | Copyright (c) 2020 https://dilu.dev All rights reserved.
// | Author : Jie
// | Date : 2020/6/14
// +-------------------------------------------------------------------------------

namespace app\demo\controller\ding;


use app\core\controller\common\BaseController;
use ding\DingApi;

class IndexController extends BaseController {
    protected function checkLogin() {
    }

    public function index() {
        $api = new DingApi($this->globalConfigs);

        $token = $api->gettoken();
        dump($token);

        $resp = $api->userList(1);
        dump($resp);
    }
}