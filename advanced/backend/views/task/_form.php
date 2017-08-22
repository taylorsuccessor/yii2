<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Phases;
use backend\models\Types;
use backend\models\Project;

/* @var $this yii\web\View */
/* @var $model backend\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'task')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'task_sub1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'task_sub2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DurationTime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'StartTime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EndTime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phases_id')->textInput() ?>


    <?= $form->field($model, 'user_id')->textInput() ?>




      <?=$form->field($model, 'project_id')->dropDownList(
      ArrayHelper::map(Project::find()->all(),'project_id','project_name' ),['prompt'=>'select a Client']
    )?>




       <?=$form->field($model, 'types_id')->dropDownList(
      ArrayHelper::map(Types::find()->all(),'types_id','types_name' ),['prompt'=>'select a Client']
    )?>






    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
