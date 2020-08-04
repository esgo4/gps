<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VehiculosChofer */

$this->title = 'Update Vehiculos Chofer: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vehiculos Chofers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehiculos-chofer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
