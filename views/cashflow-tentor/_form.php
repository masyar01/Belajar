<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\Models\CashflowTentor;

/* @var $this yii\web\View */
/* @var $model app\Models\CashflowTentor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cashflow-tentor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tentor_id')->textInput() ?>

    <?= $form->field($model, 'balance')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'is_active')->dropdownList(CashflowTentor::isActive()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
