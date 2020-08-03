<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cuadrillas */

$this->title = 'Update Cuadrillas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cuadrillas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cuadrillas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
