<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Clients */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clients-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'client_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_adress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
