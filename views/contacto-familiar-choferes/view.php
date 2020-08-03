<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ContactoFamiliarChoferes */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contacto Familiar Choferes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contacto-familiar-choferes-view">

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
            'choferes_id',
            'nombres',
            'apellido_paterno',
            'apellido_materno',
            'cargo',
            'correo_electronico',
            'email:email',
            'lada_telefono_fijo',
            'telefono_fijo',
            'extension',
            'lada_telefono_movil',
            'telefono_movil',
        ],
    ]) ?>

</div>
