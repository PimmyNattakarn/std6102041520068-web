<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Propertyforrent;

/**
 * PropertyforrentSearch represents the model behind the search form of `frontend\models\Propertyforrent`.
 */
class PropertyforrentSearch extends Propertyforrent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'room', 'privaterower_id', 'staff_id', 'branch_id'], 'integer'],
            [['street', 'city', 'type'], 'safe'],
            [['rent'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Propertyforrent::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'room' => $this->room,
            'rent' => $this->rent,
            'privaterower_id' => $this->privaterower_id,
            'staff_id' => $this->staff_id,
            'branch_id' => $this->branch_id,
        ]);

        $query->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
