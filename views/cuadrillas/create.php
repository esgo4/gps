<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cuadrillas */

$this->title = 'Create Cuadrillas';
$this->params['breadcrumbs'][] = ['label' => 'Cuadrillas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuadrillas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
