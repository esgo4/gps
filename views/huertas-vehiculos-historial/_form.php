<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HuertasVehiculosHistorial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="huertas-vehiculos-historial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'huertas_id')->textInput() ?>

    <?= $form->field($model, 'vehiculos_id')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
