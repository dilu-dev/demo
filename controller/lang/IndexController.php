<?php
// +-------------------------------------------------------------------------------
// | DiLu [ A Rapid Development Framework For Enterprise ]
// +-------------------------------------------------------------------------------
// | IndexController.php v1.0
// |
// | Copyright (c) 2020 https://dilu.dev All rights reserved.
// | Author : Jie
// | Date : 2020/5/8
// +-------------------------------------------------------------------------------

namespace app\demo\controller\lang;


use app\core\controller\common\BaseController;

class IndexController extends BaseController {
    protected function checkLogin() {
    }

    public function index() {
        $this->assign("langFromPhp", lang("SUCCESS"));
        return view();
    }
}