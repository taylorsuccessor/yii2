<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Phases */

$this->title = $model->phase_id;
$this->params['breadcrumbs'][] = ['label' => 'Phases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phases-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->phase_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->phase_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'phase_id',
            'phase_title',
            'phase_description',
            'types.types_name',
        ],
    ]) ?>

</div>
