<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "data_1".
 *
 * @property integer $id
 * @property string $email_address
 * @property string $phone_number
 * @property string $Text_about
 */
class Data1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_address', 'phone_number', 'Text_about'], 'required'],
            [['email_address', 'phone_number', 'Text_about'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email_address' => 'Email Address',
            'phone_number' => 'Phone Number',
            'Text_about' => 'Text About',
        ];
    }
}
