<?php

namespace w4ugit\loginer\controllers;

use w4ugit\loginer\models\Loginer;
use Yii;
use \yii\web\Controller;

class LoginerController extends Controller
{
    public function actionLog()
    {
        \w4ugit\loginer\LoginerAssetsBundle::register($this->view);
    }
}
