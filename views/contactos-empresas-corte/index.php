<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactosEmpresasCorteBuscar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contactos Empresas Cortes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactos-empresas-corte-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contactos Empresas Corte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'empresas_corte_id',
            'nombres',
            'apellido_paterno',
            'apellido_materno',
            //'cargo',
            //'correo_electronico',
            //'email:email',
            //'lada_telefono_fijo',
            //'telefono_fijo',
            //'extension',
            //'lada_telefono_movil',
            //'telefono_movil',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
