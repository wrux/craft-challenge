<?php

namespace modules\api;

use Craft;
use yii\base\Module as BaseModule;

/**
 * Api module
 *
 * @method static Api getInstance()
 */
class Api extends BaseModule
{
    public function init(): void
    {
        Craft::setAlias('@modules/api', __DIR__);

        // Set the controllerNamespace based on whether this is a console or web request
        if (Craft::$app->request->isConsoleRequest) {
            $this->controllerNamespace = 'modules\\api\\console\\controllers';
        } else {
            $this->controllerNamespace = 'modules\\api\\controllers';
        }

        parent::init();

        // Defer most setup tasks until Craft is fully initialized
        Craft::$app->onInit(function() {
            $this->attachEventHandlers();
            // ...
        });
    }

    private function attachEventHandlers(): void
    {
        // Register event handlers here ...
        // (see https://craftcms.com/docs/4.x/extend/events.html to get started)
    }
}
