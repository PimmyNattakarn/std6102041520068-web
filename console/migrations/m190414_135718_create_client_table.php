<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client}}`.
 */
class m190414_135718_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client}}', [
            'id' => $this->primaryKey(),
            'firstname' => $this->String(100),
            'lastname' => $this->String(100),
            'Telephone' => $this->String(10),
            'Pregftype' => $this->String(50),
            'Maxrent' => $this->Float(7,2)

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }
}
