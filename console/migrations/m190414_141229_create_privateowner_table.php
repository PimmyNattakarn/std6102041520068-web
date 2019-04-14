<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%privateowner}}`.
 */
class m190414_141229_create_privateowner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%privateowner}}', [
            'id' => $this->primaryKey(),
            'firstname' => $this->String(300),
            'lastname' => $this->String(300),
            'address' => $this->String(500),
            'Telephone' =>$this->String(11)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%privateowner}}');
    }
}
