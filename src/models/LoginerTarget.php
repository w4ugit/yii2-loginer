<?php

namespace taruktataruk\loginer\models;

use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\FileHelper;
use yii\log\Target;

class LoginerTarget extends Target
{
    public function init()
    {
        parent::init();
    }

    public function export()
    {
        $text = implode("\n", array_map([$this, 'formatMessage'], $this->messages)) . "\n";
        $model = new Loginer();
        $model->user_id = 0;
        $model->trace = $text;
        $model->save();
        if (isset(Yii::$app->params['chatId']) && Yii::$app->params['chatId'] != '') {
            Yii::$app->telegram->sendMessage([
                'chat_id' => Yii::$app->params['chatId'],
                'text' => "*Помилка на сайті " . Yii::$app->name."*\n\n".$text,
                'parse_mode' => 'Markdown'
            ]);
        } else {
            mail(Yii::$app->params['adminEmail'], 'Помилка на сайті ' . Yii::$app->name, $text);
        }
    }
}
