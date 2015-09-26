<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\Models\CashflowStudent;

/* @var $this yii\web\View */
/* @var $model app\Models\CashflowStudent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cashflow-student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'balance')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'is_active')->dropdownList(CashflowStudent::isActive()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
