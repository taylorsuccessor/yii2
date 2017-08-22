<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Types;


/* @var $this yii\web\View */
/* @var $model backend\models\Phases */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phases-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phase_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phase_description')->textInput(['maxlength' => true]) ?>


       <?=$form->field($model, 'types_id')->dropDownList(
      ArrayHelper::map(Types::find()->all(),'types_id','types_name' ),['prompt'=>'select a Client']
    )?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
