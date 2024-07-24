<?php

namespace modules\api\controllers;

use Craft;
use craft\web\Controller;
use yii\web\Response;

/**
 * Hello World controller
 */
class HelloWorldController extends Controller
{
    public $defaultAction = 'index';
    protected array|int|bool $allowAnonymous = true;

    /**
     * api/hello-world action
     */
    public function actionIndex(): string
    {
        return "Hello, World!";
    }
}
