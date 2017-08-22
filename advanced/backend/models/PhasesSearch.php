<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Phases;

/**
 * PhasesSearch represents the model behind the search form about `backend\models\Phases`.
 */
class PhasesSearch extends Phases
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phase_id', 'types_id'], 'integer'],
            [['phase_title', 'phase_description'], 'safe'],
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
        $query = Phases::find();

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
            'phase_id' => $this->phase_id,
            'types_id' => $this->types_id,
        ]);

        $query->andFilterWhere(['like', 'phase_title', $this->phase_title])
            ->andFilterWhere(['like', 'phase_description', $this->phase_description]);

        return $dataProvider;
    }
}
