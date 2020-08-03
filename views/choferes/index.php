<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ChoferesBuscar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Choferes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choferes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Choferes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombres',
            'apellido_paterno',
            'apellido_materno',
            'estado',
            //'ciudad',
            //'colonia',
            //'tipo_vialidad_id',
            //'calle',
            //'numero',
            //'codigo_postal',
            //'comunidad',
            //'lada_telefono',
            //'telefono',
            //'email:email',
            //'fecha',
            //'timestamp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
