<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Basculas */

$this->title = 'Update Basculas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Basculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="basculas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
