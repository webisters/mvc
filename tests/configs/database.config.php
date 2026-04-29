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
 * @see App::database()
 */
return [
    'default' => [
        'config' => [
            'host' => getenv('DB_HOST'),
            'port' => getenv('DB_PORT'),
            'username' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD'),
            'schema' => getenv('DB_SCHEMA'),
        ],
        'logger_instance' => 'default',
    ],
];
