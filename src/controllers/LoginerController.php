<?php

namespace taruktataruk\loginer\controllers;

use taruktataruk\loginer\models\Loginer;
use Yii;
use \yii\web\Controller;

class LoginerController extends Controller
{
    public function actionLog()
    {
        \taruktataruk\loginer\LoginerAssetsBundle::register($this->view);
    }
}
