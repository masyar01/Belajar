<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\Models\StudentPayment;

/* @var $this yii\web\View */
/* @var $model app\Models\StudentPayment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'is_validate')->dropdownList(StudentPayment::isValidate()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
