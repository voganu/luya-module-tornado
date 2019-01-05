<?php

use yii\db\Migration;

class m00000_000000_tornado_postav extends Migration
{
    public function safeUp()
    {
        $this->createTable('tor_postav', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'description' => $this->text(),
            'status' => $this->integer(1)
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('tor_postav');
    }
}
