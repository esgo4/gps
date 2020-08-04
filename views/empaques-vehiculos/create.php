<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EmpaquesVehiculos */

$this->title = 'Create Empaques Vehiculos';
$this->params['breadcrumbs'][] = ['label' => 'Empaques Vehiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empaques-vehiculos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
