<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Types */

$this->title = 'Update Types: ' . $model->types_id;
$this->params['breadcrumbs'][] = ['label' => 'Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->types_id, 'url' => ['view', 'id' => $model->types_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
