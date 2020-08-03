<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContactosBasculas */

$this->title = 'Create Contactos Basculas';
$this->params['breadcrumbs'][] = ['label' => 'Contactos Basculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactos-basculas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
