<?php

namespace modules\supportmodule\widgets;

use Craft;
use craft\base\Widget;

class SupportWidget extends Widget
{
    // Static method that defines the widget name
    public static function displayName(): string
    {
        return Craft::t('app', 'Mutual Support');
    }

    // Returns the widget's HTML to be displayed in the Dashboard
    public function getBodyHtml(): ?string
    {
        return Craft::t('app', 'Need some help? Email support@mutual.agency');
    }
}