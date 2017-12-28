<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\pano\models\Pano */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pano-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'konu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kaynak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duyuru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soyad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unvan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meslek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarih')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
