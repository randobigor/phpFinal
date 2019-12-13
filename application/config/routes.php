<?php

return [
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    'account/login' => [
        'controller' => 'account',
        'action' => 'login'
    ],
    'account/register' => [
        'controller' => 'account',
        'action' => 'register'
    ],
    'course/courselist' => [
        'controller' => 'course',
        'action' => 'courseList'
    ],
    'course/{id:\d+}' => [
        'controller' => 'course',
        'action' => 'course',
    ]
];