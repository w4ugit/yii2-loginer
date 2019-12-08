<?php

namespace taruktataruk\loginer\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class Loginer
 * @package taruktataruk\loginer\models
 *
 * @property string $trace
 * @property int $user_id
 */

class Loginer extends ActiveRecord
{
    public function rules()
    {
        return [
            [['user_id', 'trace'], 'required'],
        ];
    }
}
