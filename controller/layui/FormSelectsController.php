<?php
// +-------------------------------------------------------------------------------
// | DiLu [ A Rapid Development Framework For Enterprise ]
// +-------------------------------------------------------------------------------
// | FormSelectsController.php v1.0
// |
// | Copyright (c) 2020 https://dilu.dev All rights reserved.
// | Author : Jie
// | Date : 2020/5/5
// +-------------------------------------------------------------------------------

namespace app\demo\controller\layui;


use app\core\controller\common\BaseController;

class FormSelectsController extends BaseController {
    protected function checkLogin() {
    }

    public function index() {
        return view();
    }

    public function load() {
        $options = [
            ["name" => "北京", "value" => 1],
            ["name" => "上海", "value" => 2],
            ["name" => "广州", "value" => 3],
            ["name" => "深圳", "value" => 4, "disabled" => "disabled"],
            ["name" => "天津", "value" => 5]
        ];
        $keyword = input("get.keyword");
        if($keyword) {
            $options = array_filter($options, function ($option) use ($keyword) {
                return strrpos($option['name'], $keyword) !== false;
            });
            $options = array_values($options);
        }
        $this->result($options);
    }
}