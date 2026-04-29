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
 * @see Framework\Session\SaveHandlers\DatabaseHandler::prepareConfig()
 * @see Framework\Session\SaveHandlers\FilesHandler::prepareConfig()
 * @see Framework\Session\SaveHandlers\MemcachedHandler::prepareConfig()
 * @see Framework\Session\SaveHandlers\RedisHandler::prepareConfig()
 */
return [
    'default' => [
        'options' => [],
        'save_handler' => [
            'class' => null,
            'config' => [],
        ],
        'logger_instance' => 'default',
        'auto_start' => true,
    ],
];
