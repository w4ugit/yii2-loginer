<?php

use \yii\db\Migration;

class m060891_081219_loginer extends Migration
{
    public function up()
    {
        $this->createTable('{{%loginer}}', [
            'id' => $this->primaryKey(),
            'dt' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'user_id' => $this->integer(10),
            'action' => $this->string(255),
            'trace' => $this->text()
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%loginer}}');
    }
}
