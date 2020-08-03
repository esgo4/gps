<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContactoFamiliarChoferes */

$this->title = 'Create Contacto Familiar Choferes';
$this->params['breadcrumbs'][] = ['label' => 'Contacto Familiar Choferes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacto-familiar-choferes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
