<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "phases".
 *
 * @property integer $phase_id
 * @property string $phase_title
 * @property string $phase_description
 * @property integer $types_id
 *
 * @property Types $types
 * @property Task[] $tasks
 */
class Phases extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phases';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phase_title', 'phase_description', 'types_id'], 'required'],
            [['types_id'], 'integer'],
            [['phase_title'], 'string', 'max' => 255],
            [['phase_description'], 'string', 'max' => 233],
            [['types_id'], 'exist', 'skipOnError' => true, 'targetClass' => Types::className(), 'targetAttribute' => ['types_id' => 'types_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'phase_id' => 'Phase ID',
            'phase_title' => 'Phase Title',
            'phase_description' => 'Phase Description',
            'types_id' => 'Types ID',
        ];
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
    public function getTasks()
    {
        return $this->hasMany(Task::className(), ['phases_id' => 'phase_id']);
    }
}
