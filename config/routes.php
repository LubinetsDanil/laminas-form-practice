<?php

use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\Controller;

return [
    // Маршрути для GET-запитів
    'get_request1' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/get-request1',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'get_request1',
            ],
        ],
    ],
    'get_request2' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/get-request2',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'get_request2',
            ],
        ],
    ],
    'get_request3' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/get-request3',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'get_request3',
            ],
        ],
    ],
    'get_request4' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/get-request4',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'get_request4',
            ],
        ],
    ],
    'get_request5' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/get-request5',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'get_request5',
            ],
        ],
    ],

    // Маршрути для POST-запитів
    'post_request1' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/post-request1',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'post_request1',
            ],
        ],
    ],
    'post_request2' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/post-request2',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'post_request2',
            ],
        ],
    ],
    'post_request3' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/post-request3',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'post_request3',
            ],
        ],
    ],
    'post_request4' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/post-request4',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'post_request4',
            ],
        ],
    ],
    'post_request5' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/post-request5',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'post_request5',
            ],
        ],
    ],
    // Додайте маршрути для інших POST-запитів тут

    // Маршрут для View.php
    'vxone' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/vxone',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'vxone',
            ],
        ],
    ],
    'vxtwo' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/vxtwo',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'vxtwo',
            ],
        ],
    ],
    'vxthree' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/vxthree',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'vxthree',
            ],
        ],
    ],
    'vxfour' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/vxfour',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'vxfour',
            ],
        ],
    ],
    'vxsix' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/vxsix',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'vxsix',
            ],
        ],
    ],
    'vxseven' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/vxseven',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'vxseven',
            ],
        ],
    ],
    'vxeight' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/vxeight',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'vxeight',
            ],
        ],
    ],
    'vxnine' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/vxnine',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'vxnine',
            ],
        ],
    ],
    'vxten' => [
        'type' => Literal::class,
        'options' => [
            'route' => '/vxten',
            'defaults' => [
                'controller' => 'YourControllerName',
                'action' => 'vxten',
            ],
        ],
    ],
];
