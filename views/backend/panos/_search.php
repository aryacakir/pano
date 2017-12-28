<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\pano\models\PanoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pano-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'konu') ?>

    <?= $form->field($model, 'kaynak') ?>

    <?= $form->field($model, 'duyuru') ?>

    <?= $form->field($model, 'ad') ?>

    <?php // echo $form->field($model, 'soyad') ?>

    <?php // echo $form->field($model, 'unvan') ?>

    <?php // echo $form->field($model, 'meslek') ?>

    <?php // echo $form->field($model, 'tarih') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
