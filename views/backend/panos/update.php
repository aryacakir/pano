<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\pano\models\Pano */

$this->title = 'Update Pano: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Panos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pano-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
