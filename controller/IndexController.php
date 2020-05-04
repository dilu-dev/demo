<?php
declare (strict_types=1);

namespace app\demo\controller;

use app\core\controller\common\BaseController;

class IndexController extends BaseController {
    public function index() {
        event("UserLogin", ['a' => 12222]);
        return lang('SUCCESS');
    }

    public function test0() {
        $this->success("ok", "/demo/index/test");
    }

    public function test() {
        dump($this->env);
        $this->assign("aaa", "1231");
        return view();
    }

    public function testMobile() {
        return view();
    }
}
