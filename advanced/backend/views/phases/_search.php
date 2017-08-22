<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PhasesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phases-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'phase_id') ?>

    <?= $form->field($model, 'phase_title') ?>

    <?= $form->field($model, 'phase_description') ?>

    <?= $form->field($model, 'types_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
