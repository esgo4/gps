<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehiculosChofer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehiculos-chofer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vehiculos_id')->textInput() ?>

    <?= $form->field($model, 'choferes_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
