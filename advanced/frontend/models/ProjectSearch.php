<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\project;

/**
 * ProjectSearch represents the model behind the search form about `backend\models\project`.
 */
class ProjectSearch extends project
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'client_id'], 'integer'],
            [['project_name', 'project_desc', 'project_contract'], 'safe'],
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
        $query = project::find();

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
            'project_id' => $this->project_id,
            'client_id' => $this->client_id,
        ]);

        $query->andFilterWhere(['like', 'project_name', $this->project_name])
            ->andFilterWhere(['like', 'project_desc', $this->project_desc])
            ->andFilterWhere(['like', 'project_contract', $this->project_contract]);

        return $dataProvider;
    }
}
