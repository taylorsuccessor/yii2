<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Data1 */

$this->title = 'Create Data1';
$this->params['breadcrumbs'][] = ['label' => 'Data1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
