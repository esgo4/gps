<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContactosEmpresasCorte */

$this->title = 'Update Contactos Empresas Corte: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contactos Empresas Cortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contactos-empresas-corte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
