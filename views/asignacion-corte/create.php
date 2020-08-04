<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AsignacionCorte */

$this->title = 'Create Asignacion Corte';
$this->params['breadcrumbs'][] = ['label' => 'Asignacion Cortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asignacion-corte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
