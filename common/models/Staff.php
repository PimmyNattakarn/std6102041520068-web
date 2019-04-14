<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $position
 * @property string $sex
 * @property string $DOB
 * @property int $salary
 * @property int $branch_id
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DOB'], 'safe'],
            [['salary', 'branch_id'], 'integer'],
            [['firstname', 'lastname'], 'string', 'max' => 100],
            [['position'], 'string', 'max' => 50],
            [['sex'], 'string', 'max' => 2],
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
            'position' => 'Position',
            'sex' => 'Sex',
            'DOB' => 'Dob',
            'salary' => 'Salary',
            'branch_id' => 'Branch ID',
        ];
    }
}
