<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property int $id
 * @property int $Client_id
 * @property string $DateJoined
 * @property int $Propertyforrent
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Client_id', 'Propertyforrent'], 'integer'],
            [['DateJoined'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Client_id' => 'Client ID',
            'DateJoined' => 'Date Joined',
            'Propertyforrent' => 'Propertyforrent',
        ];
    }
}
