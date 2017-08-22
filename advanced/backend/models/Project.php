<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property integer $project_id
 * @property string $project_name
 * @property string $project_desc
 * @property integer $client_id
 * @property string $project_contract
 *
 * @property Clients $client
 * @property Task[] $tasks
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name', 'project_desc', 'client_id', 'project_contract'], 'required'],
            [['client_id'], 'integer'],
            [['project_name', 'project_desc', 'project_contract'], 'string', 'max' => 255],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'client_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'project_name' => 'Project Name',
            'project_desc' => 'Project Desc',
            'client_id' => 'Client name',
            'project_contract' => 'Project Contract',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['client_id' => 'client_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::className(), ['project_id' => 'project_id']);
    }
}
