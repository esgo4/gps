<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\HuertasBuscar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Huertas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="huertas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Huertas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'estado',
            'ciudad',
            'colonia',
            //'tipo_vialidad_id',
            //'calle',
            //'numero',
            //'codigo_postal',
            //'comunidad',
            //'latitud',
            //'longitud',
            //'poligono:ntext',
            //'fecha',
            //'timestamp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
