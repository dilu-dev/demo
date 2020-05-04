<?php
// +-------------------------------------------------------------------------------
// | DiLu [ A Rapid Development Framework For Enterprise ]
// +-------------------------------------------------------------------------------
// | UserSubscriber.php v1.0
// |
// | Copyright (c) 2020 https://dilu.dev All rights reserved.
// | Author : Jie
// | Date : 2020/5/2
// +-------------------------------------------------------------------------------

namespace app\demo\event\subscribe;


class UserSubscriber {
    public function onUserLogin($user)
    {
        dump($user);
    }
}