<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%staff}}`.
 */
class m190414_100833_create_staff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%staff}}', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(100),
            'lastname' => $this->string(100),
            'position' => $this->string(50),
            'sex' => $this->string(2),
            'DOB' => $this->dateTime(),
            'salary' =>$this->integer(11),
            'branch_id' =>$this->integer(10)

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%staff}}');
    }
}
