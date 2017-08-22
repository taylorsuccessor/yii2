<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PhasesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phases-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phases', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'phase_id',
            'phase_title',
            'phase_description',
            'types.types_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
