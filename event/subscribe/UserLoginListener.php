<?php
// +-------------------------------------------------------------------------------
// | DiLu [ A Rapid Development Framework For Enterprise ]
// +-------------------------------------------------------------------------------
// | UserLoginListen.php v1.0
// |
// | Copyright (c) 2020 https://dilu.dev All rights reserved.
// | Author : Jie
// | Date : 2020/5/2
// +-------------------------------------------------------------------------------

namespace app\demo\event\subscribe;


class UserLoginListener {
    public function handle($user)
    {
        dump(1111);
    }
}