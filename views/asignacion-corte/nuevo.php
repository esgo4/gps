<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AsignacionCorte */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<div class="asignacion-corte-form">
    
     <div class="card card-primary">
         <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
            <div class="card-body">
                <div class="row">
                   <div class="col-md-4 col-xs-12">
                       <h3>Nueva orden de corte</h3>
                   </div>
                   <div class="col-md-4 col-xs-12">
                   </div>
                   <div class="col-md-4 col-xs-12">
                       <?= $form->field($model, 'fecha')->textInput(['readonly' => true]) ?>
                   </div>
                </div>
               <div class="row">
                   <div class="col-md-4 col-xs-12">
                       <?= $form->field($model, 'empaques_id')->textInput() ?>
                   </div>
                   <div class="col-md-4 col-xs-12">
                       <?= $form->field($model, 'empresas_corte_id')->textInput() ?>
                   </div>
                   <div class="col-md-4 col-xs-12">
                        <?= $form->field($model, 'huerta_id')->textInput() ?>
                   </div>
                </div>
                
                <div class="row">
                   <div class="col-md-4 col-xs-12">
                       <?= $form->field($model, 'basculas_id')->textInput() ?>
                   </div>
                   <div class="col-md-4 col-xs-12">
                       <?= $form->field($model, 'vehiculos_id')->textInput() ?>
                   </div>
                   <div class="col-md-4 col-xs-12">
                        <?= $form->field($model, 'huerta_id')->textInput() ?>
                   </div>
                </div>                   
        
               <div class="row">
                   <div class="col-md-4 col-xs-12">
                       <?= $form->field($model, 'chofer_id')->textInput() ?>
                   </div>
                   <div class="col-md-4 col-xs-12">
                       <?= $form->field($model, 'cuadrilla_id')->textInput() ?>
                   </div>
                   <div class="col-md-4 col-xs-12">
                        <?= $form->field($model, 'tipo_corte_id')->textInput() ?>
                   </div>
                </div>
                
                <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
            </div>
         
         
               
           
        </div>

    

    <?php ActiveForm::end(); ?>

</div>
