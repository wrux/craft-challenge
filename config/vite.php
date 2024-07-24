<?php
use craft\helpers\App;


return [
    'checkDevServer' => true,
    'devServerInternal' => 'http://localhost:5173', // For PHP
    'devServerPublic' => App::env('PRIMARY_SITE_URL') . ':5173/dist/', // For Twig
    'serverPublic' => App::env('PRIMARY_SITE_URL') . '/dist/',
    'useDevServer' => App::env('ENVIRONMENT') === 'dev' || App::env('CRAFT_ENVIRONMENT') === 'dev',
    'manifestPath' => '@webroot/dist/.vite/manifest.json',
    'includeReactRefreshShim' => false,
    'includeModulePreloadShim' => true,
];