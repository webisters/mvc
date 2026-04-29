<?php
/*
 * This file is part of Webisters MVC Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
return [
    'default' => [
        'allowed_hosts' => [],
        'force_https' => false,
        'server_vars' => [
            'HTTP_FOO' => 'Foo',
        ],
        'json_flags' => \JSON_THROW_ON_ERROR,
    ],
];
