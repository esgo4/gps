<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gps */

$this->title = 'Create Gps';
$this->params['breadcrumbs'][] = ['label' => 'Gps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gps-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
