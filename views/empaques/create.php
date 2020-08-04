<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empaques */

$this->title = 'Create Empaques';
$this->params['breadcrumbs'][] = ['label' => 'Empaques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empaques-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
