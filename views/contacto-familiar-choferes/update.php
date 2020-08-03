<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContactoFamiliarChoferes */

$this->title = 'Update Contacto Familiar Choferes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contacto Familiar Choferes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contacto-familiar-choferes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
