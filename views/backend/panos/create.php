<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\pano\models\Pano */

$this->title = 'Create Pano';
$this->params['breadcrumbs'][] = ['label' => 'Panos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pano-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
