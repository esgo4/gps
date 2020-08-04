<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AsignacionCorte */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asignacion Cortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="asignacion-corte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'empaques_id',
            'empresas_corte_id',
            'huerta_id',
            'basculas_id',
            'vehiculos_id',
            'chofer_id',
            'cuadrilla_id',
            'fecha',
            'timestamp',
        ],
    ]) ?>

</div>
