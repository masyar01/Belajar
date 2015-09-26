<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\Models\TentorJobs;

/* @var $this yii\web\View */
/* @var $model app\Models\TentorJobs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tentor-jobs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post_id')->textInput() ?>

    <?= $form->field($model, 'tentor_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'is_active')->dropdownList(TentorJobs::isActive()) ?>

    <?= $form->field($model, 'is_complete')->dropdownList(TentorJobs::isComplete()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
