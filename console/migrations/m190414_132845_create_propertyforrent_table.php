<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%propertyforrent}}`.
 */
class m190414_132845_create_propertyforrent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%propertyforrent}}', [
            'id' => $this->primaryKey(),
            'street' => $this->string(100),
            'city' => $this->string(100),
            'type' => $this->string(50),
            'room' => $this->integer(5),
            'rent' => $this->float(7,2),
            'privaterower_id' => $this->integer(),
            'staff_id' => $this->integer(),
            'branch_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%propertyforrent}}');
    }
}
