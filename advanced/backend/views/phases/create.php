<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Phases */

$this->title = 'Create Phases';
$this->params['breadcrumbs'][] = ['label' => 'Phases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phases-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
