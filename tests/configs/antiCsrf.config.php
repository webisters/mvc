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
        'enabled' => false,
        'token_name' => 'csrf_token',
        'token_bytes_length' => 8,
        'generate_token_function' => 'base64_encode',
    ],
];
