<?php

namespace w4ugit\loginer;

use Yii;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            'loginer/log' => 'loginer/loginer/log',
        ], false);
        /*
         * Реєстрація модуля в системі
         * (замість вказування в файлі frontend/config/main.php
         */
        $app->setModule('loginer', 'w4ugit\loginer\Module');
    }
}
