<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Basculas */

$this->title = 'Create Basculas';
$this->params['breadcrumbs'][] = ['label' => 'Basculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basculas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
