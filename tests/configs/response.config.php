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
 * @see App::response()
 */

use Framework\HTTP\CSP;

return [
    'default' => [
        'headers' => [
            'X-Version' => '3.6.9',
        ],
        'auto_etag' => true,
        'auto_language' => true,
        'cache' => [
            'seconds' => 60,
            'public' => true,
        ],
        'csp' => [
            CSP::defaultSrc => [
                'self',
            ],
            CSP::styleSrc => [
                'self',
                'cdn.foo.tld',
            ],
        ],
        'csp_report_only' => [
            CSP::defaultSrc => [
                'self',
            ],
        ],
        'json_flags' => \JSON_THROW_ON_ERROR,
        'replace_headers' => false,
        'request_instance' => 'default',
    ],
];
