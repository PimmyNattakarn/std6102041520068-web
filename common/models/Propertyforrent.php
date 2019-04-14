<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "propertyforrent".
 *
 * @property int $id
 * @property string $street
 * @property string $city
 * @property string $type
 * @property int $room
 * @property double $rent
 * @property int $privaterower_id
 * @property int $staff_id
 * @property int $branch_id
 */
class Propertyforrent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propertyforrent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room', 'privaterower_id', 'staff_id', 'branch_id'], 'integer'],
            [['rent'], 'number'],
            [['street', 'city'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'street' => 'Street',
            'city' => 'City',
            'type' => 'Type',
            'room' => 'Room',
            'rent' => 'Rent',
            'privaterower_id' => 'Privaterower ID',
            'staff_id' => 'Staff ID',
            'branch_id' => 'Branch ID',
        ];
    }
}
