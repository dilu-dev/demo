<?php
// +-------------------------------------------------------------------------------
// | DiLu [ A Rapid Development Framework For Enterprise ]
// +-------------------------------------------------------------------------------
// | LoadingController.php v1.0
// |
// | Copyright (c) 2020 https://dilu.dev All rights reserved.
// | Author : Jie
// | Date : 2020/5/4
// +-------------------------------------------------------------------------------

namespace app\demo\controller\js;


use app\core\controller\common\BaseController;

class ComponentController extends BaseController {

    protected function checkLogin() {
    }

    public function index() {
        return view();
    }
}