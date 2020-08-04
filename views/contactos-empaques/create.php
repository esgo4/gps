<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContactosEmpaques */

$this->title = 'Create Contactos Empaques';
$this->params['breadcrumbs'][] = ['label' => 'Contactos Empaques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactos-empaques-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
