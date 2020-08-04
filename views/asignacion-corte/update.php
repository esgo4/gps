<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AsignacionCorte */

$this->title = 'Update Asignacion Corte: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asignacion Cortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asignacion-corte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
