<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\PostJob */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-job-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longtitude')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'is_active')->textInput() ?>

    <?= $form->field($model, 'is_taken')->textInput() ?>

    <?= $form->field($model, 'course_date')->textInput() ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'fee')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
