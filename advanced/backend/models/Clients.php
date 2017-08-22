<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property integer $client_id
 * @property string $client_name
 * @property string $client_number
 * @property string $client_company
 * @property string $client_adress
 *
 * @property Project[] $projects
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_name', 'client_number', 'client_company', 'client_adress'], 'required'],
            [['client_name', 'client_number', 'client_company', 'client_adress'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'client_id' => 'Client ID',
            'client_name' => 'Client Name',
            'client_number' => 'Client Number',
            'client_company' => 'Client Company',
            'client_adress' => 'Client Adress',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['client_id' => 'client_id']);
    }
}
