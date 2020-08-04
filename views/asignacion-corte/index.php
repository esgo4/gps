<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AsignacionCorteBuscar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asignacion Cortes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asignacion-corte-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Asignacion Corte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'empaques_id',
            'empresas_corte_id',
            'huerta_id',
            'basculas_id',
            //'vehiculos_id',
            //'chofer_id',
            //'cuadrilla_id',
            //'fecha',
            //'timestamp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
