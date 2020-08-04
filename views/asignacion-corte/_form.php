<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AsignacionCorte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asignacion-corte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'empaques_id')->textInput() ?>

    <?= $form->field($model, 'empresas_corte_id')->textInput() ?>

    <?= $form->field($model, 'huerta_id')->textInput() ?>

    <?= $form->field($model, 'basculas_id')->textInput() ?>

    <?= $form->field($model, 'vehiculos_id')->textInput() ?>

    <?= $form->field($model, 'chofer_id')->textInput() ?>

    <?= $form->field($model, 'cuadrilla_id')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'timestamp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
