<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Task;

/**
 * TaskSearch represents the model behind the search form about `backend\models\Task`.
 */
class TaskSearch extends Task
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_id', 'phases_id', 'user_id', 'project_id', 'types_id'], 'integer'],
            [['task', 'task_sub1', 'task_sub2', 'DurationTime', 'StartTime', 'EndTime'], 'safe'],
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
        $query = Task::find();

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
            'task_id' => $this->task_id,
            'phases_id' => $this->phases_id,
            'user_id' => $this->user_id,
            'project_id' => $this->project_id,
            'types_id' => $this->types_id,
        ]);

        $query->andFilterWhere(['like', 'task', $this->task])
            ->andFilterWhere(['like', 'task_sub1', $this->task_sub1])
            ->andFilterWhere(['like', 'task_sub2', $this->task_sub2])
            ->andFilterWhere(['like', 'DurationTime', $this->DurationTime])
            ->andFilterWhere(['like', 'StartTime', $this->StartTime])
            ->andFilterWhere(['like', 'EndTime', $this->EndTime]);

        return $dataProvider;
    }
}
