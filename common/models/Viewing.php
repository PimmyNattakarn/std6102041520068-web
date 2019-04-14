<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "viewing".
 *
 * @property int $id
 * @property int $Client_id
 * @property int $Property_for_rent_id
 * @property string $ViewDate
 * @property string $Comment
 */
class Viewing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viewing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Client_id', 'Property_for_rent_id'], 'integer'],
            [['ViewDate'], 'safe'],
            [['Comment'], 'string', 'max' => 500],
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
            'Property_for_rent_id' => 'Property For Rent ID',
            'ViewDate' => 'View Date',
            'Comment' => 'Comment',
        ];
    }
}
