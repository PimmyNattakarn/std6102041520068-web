<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $Telephone
 * @property string $Pregftype
 * @property double $Maxrent
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Maxrent'], 'number'],
            [['firstname', 'lastname'], 'string', 'max' => 100],
            [['Telephone'], 'string', 'max' => 10],
            [['Pregftype'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'Telephone' => 'Telephone',
            'Pregftype' => 'Pregftype',
            'Maxrent' => 'Maxrent',
        ];
    }
}
