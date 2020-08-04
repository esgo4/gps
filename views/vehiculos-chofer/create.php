<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VehiculosChofer */

$this->title = 'Create Vehiculos Chofer';
$this->params['breadcrumbs'][] = ['label' => 'Vehiculos Chofers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehiculos-chofer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
