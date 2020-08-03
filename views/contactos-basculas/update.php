<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContactosBasculas */

$this->title = 'Update Contactos Basculas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contactos Basculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contactos-basculas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
