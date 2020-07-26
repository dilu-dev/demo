<?php
declare (strict_types=1);

namespace app\demo\controller;

use app\core\controller\common\BaseController;

class IndexController extends BaseController {
    protected function checkLogin() {
    }

    public function index() {
        dump($this->env);
    }

    public function pc() {
        return view();
    }

    public function h5() {
        return view();
    }
}
