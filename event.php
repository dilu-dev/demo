<?php
// 这是系统自动生成的event定义文件
return [
    'listen'  =>    [
        'UserLogin'    =>    ['\app\demo\event\subscribe\UserLoginListener'],
    ],
    'subscribe'    =>    [
        '\app\demo\event\subscribe\UserSubscriber',
    ]
];
