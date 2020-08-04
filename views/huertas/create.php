<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Huertas */

$this->title = 'Create Huertas';
$this->params['breadcrumbs'][] = ['label' => 'Huertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="huertas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
