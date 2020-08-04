<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ContactosEmpresasCorte */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contactos Empresas Cortes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contactos-empresas-corte-view">

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
            'empresas_corte_id',
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
