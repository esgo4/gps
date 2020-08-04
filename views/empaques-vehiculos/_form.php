<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmpaquesVehiculos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empaques-vehiculos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Empaques_id')->textInput() ?>

    <?= $form->field($model, 'vehiculos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
