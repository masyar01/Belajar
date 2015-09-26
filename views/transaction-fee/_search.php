<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\TransactionFeeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaction-fee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fee') ?>

    <?= $form->field($model, 'create_date') ?>

    <?= $form->field($model, 'update_date') ?>

    <?= $form->field($model, 'student_id') ?>

    <?php // echo $form->field($model, 'tentor_id') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <?php // echo $form->field($model, 'is_cancel') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
