<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Data1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Data1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email_address:email',
            'phone_number',
            'Text_about',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
