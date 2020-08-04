<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContactosEmpresasCorte */

$this->title = 'Create Contactos Empresas Corte';
$this->params['breadcrumbs'][] = ['label' => 'Contactos Empresas Cortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactos-empresas-corte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
