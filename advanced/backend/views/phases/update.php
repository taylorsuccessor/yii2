<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Phases */

$this->title = 'Update Phases: ' . $model->phase_id;
$this->params['breadcrumbs'][] = ['label' => 'Phases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->phase_id, 'url' => ['view', 'id' => $model->phase_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phases-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
