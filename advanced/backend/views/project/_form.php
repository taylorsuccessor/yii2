<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Clients;
/* @var $this yii\web\View */
/* @var $model backend\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_desc')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'client_id')->dropDownList(
      ArrayHelper::map(Clients::find()->all(),'client_id','client_name' ),['prompt'=>'select a Client']
    )?>



    <?= $form->field($model, 'project_contract')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
