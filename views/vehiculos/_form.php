<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vehiculos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehiculos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'año')->textInput() ?>

    <?= $form->field($model, 'placas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serie_motor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kilometraje')->textInput() ?>

    <?= $form->field($model, 'foto1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'timestamp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
