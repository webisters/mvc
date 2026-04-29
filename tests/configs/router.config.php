<?php
/*
 * This file is part of Webisters MVC Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * @see App::router()
 */

use Framework\Routing\Router;

return [
    'default' => [
        'auto_options' => true,
        'auto_methods' => true,
        'placeholders' => [
            'foo' => '(.*)',
        ],
        'files' => [
            __DIR__ . '/routes.php',
        ],
        'callback' => static function (Router $router) : void {
            // $router is here!
        },
        'response_instance' => 'default',
        'language_instance' => 'default',
    ],
];
