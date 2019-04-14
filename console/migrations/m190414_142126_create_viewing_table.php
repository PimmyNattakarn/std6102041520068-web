<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%viewing}}`.
 */
class m190414_142126_create_viewing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%viewing}}', [
            'id' => $this->primaryKey(),
            'Client_id' => $this->integer(),
            'Property_for_rent_id' =>$this->integer(),
            'ViewDate' =>$this -> DateTime(),
            'Comment' =>$this -> String (500)

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%viewing}}');
    }
}
