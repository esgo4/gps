<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HuertasVehiculosHistorial */

$this->title = 'Create Huertas Vehiculos Historial';
$this->params['breadcrumbs'][] = ['label' => 'Huertas Vehiculos Historials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="huertas-vehiculos-historial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
