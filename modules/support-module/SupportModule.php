<?php

namespace modules\supportmodule;

use Craft;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Dashboard;
use yii\base\Module as BaseModule;
use yii\base\Event;
use modules\supportmodule\widgets\SupportWidget;

/**
 * SupportModule module
 *
 * @method static SupportModule getInstance()
 */
class SupportModule extends BaseModule
{
    public function init(): void
    {
        Craft::setAlias('@modules/supportmodule', __DIR__);

        // Set the controllerNamespace based on whether this is a console or web request
        if (Craft::$app->request->isConsoleRequest) {
            $this->controllerNamespace = 'modules\\supportmodule\\console\\controllers';
        } else {
            $this->controllerNamespace = 'modules\\supportmodule\\controllers';
        }

        parent::init();

        // Defer most setup tasks until Craft is fully initialized
        Craft::$app->onInit(function() {
            $this->attachEventHandlers();
            // ...
        });

        Event::on(
            Dashboard::class,
            Dashboard::EVENT_REGISTER_WIDGET_TYPES,
            function (RegisterComponentTypesEvent $event) {
                $event->types[] = SupportWidget::class;
            }
        );
    }

    private function attachEventHandlers(): void
    {
        // Register event handlers here ...
        // (see https://craftcms.com/docs/4.x/extend/events.html to get started)
    }
}
