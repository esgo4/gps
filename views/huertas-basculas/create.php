<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HuertasBasculas */

$this->title = 'Create Huertas Basculas';
$this->params['breadcrumbs'][] = ['label' => 'Huertas Basculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="huertas-basculas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
