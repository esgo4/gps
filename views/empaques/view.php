<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Empaques */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Empaques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="empaques-view">

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
            'nombre',
            'estado',
            'ciudad',
            'colonia',
            'tipo_vialidad_id',
            'calle',
            'numero',
            'codigo_postal',
            'comunidad',
            'area_telefono',
            'telefono',
            'extension',
            'latitud',
            'longitud',
            'email:email',
            'fecha',
            'timestamp',
        ],
    ]) ?>

</div>