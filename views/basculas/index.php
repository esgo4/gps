<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BasculasBuscar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Basculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basculas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Basculas', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'area_telefono',
            //'telefono',
            //'extension',
            //'email:email',
            //'fecha',
            //'timestamp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
