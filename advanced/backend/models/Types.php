<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "types".
 *
 * @property integer $types_id
 * @property string $types_name
 *
 * @property Phases[] $phases
 * @property Task[] $tasks
 */
class Types extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['types_name'], 'required'],
            [['types_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'types_id' => 'Types ID',
            'types_name' => 'Types Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhases()
    {
        return $this->hasMany(Phases::className(), ['types_id' => 'types_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::className(), ['types_id' => 'types_id']);
    }
}
