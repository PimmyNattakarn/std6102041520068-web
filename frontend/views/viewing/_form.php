<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Viewing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="viewing-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Client_id')->textInput() ?>

    <?= $form->field($model, 'Property_for_rent_id')->textInput() ?>

    <?= $form->field($model, 'ViewDate')->textInput() ?>

    <?= $form->field($model, 'Comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
