<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Viewing;

/**
 * ViewingSearch represents the model behind the search form of `frontend\models\Viewing`.
 */
class ViewingSearch extends Viewing
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Client_id', 'Property_for_rent_id'], 'integer'],
            [['ViewDate', 'Comment'], 'safe'],
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
        $query = Viewing::find();

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
            'Client_id' => $this->Client_id,
            'Property_for_rent_id' => $this->Property_for_rent_id,
            'ViewDate' => $this->ViewDate,
        ]);

        $query->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
