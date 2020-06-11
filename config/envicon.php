<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Favicons storage path
    |--------------------------------------------------------------------------
    |
    | This settings holds the path to the folder in which the favicons will be
    | looked for by the package. This path must be specified relatively to the
    | public/ folder and must be web accessible.
    |
    */
    'storage' => 'favicons/',

    /*
    |--------------------------------------------------------------------------
    | Default Favicon
    |--------------------------------------------------------------------------
    |
    | The default favicon will be returned when the current environment doesn't
    | match any of the configurations. Either specify the favicon's path
    | relative to the favicon's storage path.
    |
    */

    'default' => 'production.svg',

    /*
    |--------------------------------------------------------------------------
    | Favicon matchers
    |--------------------------------------------------------------------------
    |
    | This section allows you to declare favicons with a set of conditions for
    | each of them that if met, will return that favicon's path. The following
    | conditions are valid: env, hostname.
    |
    */

    'matchers' => [

        'production.svg' => [
            'env' => 'local',
            'host' => 'hedger.ch',
            'route' => '/'
        ]

    ]

];
