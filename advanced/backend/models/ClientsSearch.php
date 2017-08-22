<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Clients;

/**
 * ClientsSearch represents the model behind the search form about `backend\models\Clients`.
 */
class ClientsSearch extends Clients
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_id'], 'integer'],
            [['client_name', 'client_number', 'client_company', 'client_adress'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Clients::find();

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
            'client_id' => $this->client_id,
        ]);

        $query->andFilterWhere(['like', 'client_name', $this->client_name])
            ->andFilterWhere(['like', 'client_number', $this->client_number])
            ->andFilterWhere(['like', 'client_company', $this->client_company])
            ->andFilterWhere(['like', 'client_adress', $this->client_adress]);

        return $dataProvider;
    }
}
