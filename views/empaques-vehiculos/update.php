<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EmpaquesVehiculos */

$this->title = 'Update Empaques Vehiculos: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Empaques Vehiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empaques-vehiculos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
