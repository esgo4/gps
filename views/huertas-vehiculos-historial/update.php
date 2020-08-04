<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HuertasVehiculosHistorial */

$this->title = 'Update Huertas Vehiculos Historial: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Huertas Vehiculos Historials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="huertas-vehiculos-historial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
