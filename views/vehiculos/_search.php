<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehiculosBuscar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehiculos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'marca') ?>

    <?= $form->field($model, 'modelo') ?>

    <?= $form->field($model, 'año') ?>

    <?= $form->field($model, 'placas') ?>

    <?php // echo $form->field($model, 'serie_motor') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'kilometraje') ?>

    <?php // echo $form->field($model, 'foto1') ?>

    <?php // echo $form->field($model, 'foto2') ?>

    <?php // echo $form->field($model, 'foto3') ?>

    <?php // echo $form->field($model, 'foto4') ?>

    <?php // echo $form->field($model, 'foto5') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'timestamp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
