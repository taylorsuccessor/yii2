<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property integer $task_id
 * @property string $task
 * @property string $task_sub1
 * @property string $task_sub2
 * @property string $DurationTime
 * @property string $StartTime
 * @property string $EndTime
 * @property integer $phases_id
 * @property integer $user_id
 * @property integer $project_id
 * @property integer $types_id
 *
 * @property User $user
 * @property Project $project
 * @property Types $types
 * @property Phases $phases
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task', 'task_sub1', 'task_sub2', 'DurationTime', 'StartTime', 'EndTime', 'phases_id', 'user_id', 'project_id', 'types_id'], 'required'],
            [['phases_id', 'user_id', 'project_id', 'types_id'], 'integer'],
            [['task', 'task_sub1', 'task_sub2', 'DurationTime'], 'string', 'max' => 255],
            [['StartTime', 'EndTime'], 'string', 'max' => 233],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'project_id']],
            [['types_id'], 'exist', 'skipOnError' => true, 'targetClass' => Types::className(), 'targetAttribute' => ['types_id' => 'types_id']],
            [['phases_id'], 'exist', 'skipOnError' => true, 'targetClass' => Phases::className(), 'targetAttribute' => ['phases_id' => 'phase_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'task_id' => 'Task ID',
            'task' => 'Task',
            'task_sub1' => 'Task Sub1',
            'task_sub2' => 'Task Sub2',
            'DurationTime' => 'Duration Time',
            'StartTime' => 'Start Time',
            'EndTime' => 'End Time',
            'phases_id' => 'Phases ID',
            'user_id' => 'User ID',
            'project_id' => 'Project ID',
            'types_id' => 'Types ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['project_id' => 'project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypes()
    {
        return $this->hasOne(Types::className(), ['types_id' => 'types_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhases()
    {
        return $this->hasOne(Phases::className(), ['phase_id' => 'phases_id']);
    }
}
