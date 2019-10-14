<?php

/*
 * This file is part of ibrand/coterie-server.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'routeAttributes' => [
        'middleware' => ['api', 'cors'],
    ],

    'routeAuthAttributes' => [
        'middleware' => ['auth:api'],
    ],
];