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
        'validators' => [
            Framework\MVC\Validator::class,
            Framework\Validation\FilesValidator::class,
        ],
        'language_instance' => 'default',
    ],
];
