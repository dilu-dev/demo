<?php
// +-------------------------------------------------------------------------------
// | DiLu [ A Rapid Development Framework For Enterprise ]
// +-------------------------------------------------------------------------------
// | IndexController.php v1.0
// |
// | Copyright (c) 2020 https://dilu.dev All rights reserved.
// | Author : Jie
// | Date : 2020/6/22
// +-------------------------------------------------------------------------------

namespace app\demo\controller\sms;


use app\core\controller\common\BaseController;
use app\core\extension\sms\SmsExtension;

class IndexController extends BaseController {

    protected function checkLogin() {
    }

    public function index() {
        $metas = SmsExtension::getAllExtensionImplMetas();
        dump($metas);
    }
}