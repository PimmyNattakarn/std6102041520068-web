<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "privateowner".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property string $Telephone
 */
class Privateowner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'privateowner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'string', 'max' => 300],
            [['address'], 'string', 'max' => 500],
            [['Telephone'], 'string', 'max' => 11],
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
            'address' => 'Address',
            'Telephone' => 'Telephone',
        ];
    }
}
