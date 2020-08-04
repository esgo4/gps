<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContactosEmpresasCorteBuscar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contactos-empresas-corte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'empresas_corte_id') ?>

    <?= $form->field($model, 'nombres') ?>

    <?= $form->field($model, 'apellido_paterno') ?>

    <?= $form->field($model, 'apellido_materno') ?>

    <?php // echo $form->field($model, 'cargo') ?>

    <?php // echo $form->field($model, 'correo_electronico') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'lada_telefono_fijo') ?>

    <?php // echo $form->field($model, 'telefono_fijo') ?>

    <?php // echo $form->field($model, 'extension') ?>

    <?php // echo $form->field($model, 'lada_telefono_movil') ?>

    <?php // echo $form->field($model, 'telefono_movil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
