<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AsignacionCorteBuscar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asignacion-corte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'empaques_id') ?>

    <?= $form->field($model, 'empresas_corte_id') ?>

    <?= $form->field($model, 'huerta_id') ?>

    <?= $form->field($model, 'basculas_id') ?>

    <?php // echo $form->field($model, 'vehiculos_id') ?>

    <?php // echo $form->field($model, 'chofer_id') ?>

    <?php // echo $form->field($model, 'cuadrilla_id') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'timestamp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
