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
use app\core\service\VerifyCodeService;
use app\core\model\VerifyCode;

class IndexController extends BaseController {

    protected function checkLogin() {
    }

    public function index() {
        $metas = SmsExtension::getAllExtensionImplMetas();
        dump($metas);
    }

    public function send() {
        $phoneNumber = "18896580792";
        $code = "1234";
        $expireMinutes = 10;
        $ret = SmsExtension::instance()->sendCodeMsg($phoneNumber, $code, $expireMinutes);
        dump($ret);
    }

    public function code() {
        $phoneNumber = "18896580792";
        $code = VerifyCodeService::send($phoneNumber);
        dump($code);
        $ret = VerifyCodeService::verify($phoneNumber, $code);
        dump($ret);
        exit;
    }
}