<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\TransactionFee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaction-fee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fee')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'tentor_id')->textInput() ?>

    <?= $form->field($model, 'is_active')->textInput() ?>

    <?= $form->field($model, 'is_cancel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
