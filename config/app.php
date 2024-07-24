<?php
/**
 * Yii Application Config
 *
 * Edit this file at your own risk!
 *
 * The array returned by this file will get merged with
 * vendor/craftcms/cms/src/config/app.php and app.[web|console].php, when
 * Craft's bootstrap script is defining the configuration for the entire
 * application.
 *
 * You can define custom modules and system components, and even override the
 * built-in system components.
 *
 * If you want to modify the application config for *only* web requests or
 * *only* console requests, create an app.web.php or app.console.php file in
 * your config/ folder, alongside this one.
 * 
 * Read more about application configuration:
 * https://craftcms.com/docs/4.x/config/app.html
 */

use craft\helpers\App;
use modules\api\Api;
use modules\supportmodule\SupportModule;

return [
    'id' => App::env('CRAFT_APP_ID') ?: 'CraftCMS',
    'aliases' => [
        "@DO_CLIENT" => App::env('DO_CLIENT'),
        "@DO_ENDPOINT" => "https://" . App::env("DO_REGION") . ".digitaloceanspaces.com",
    ],
    'modules' => ['support-module' => SupportModule::class, 'api' => Api::class],
    'bootstrap' => ['support-module', 'api']
];
