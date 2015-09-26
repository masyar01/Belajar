<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\PostJobSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-job-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'desc') ?>

    <?= $form->field($model, 'latitude') ?>

    <?= $form->field($model, 'longtitude') ?>

    <?php // echo $form->field($model, 'student_id') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <?php // echo $form->field($model, 'is_taken') ?>

    <?php // echo $form->field($model, 'course_date') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'fee') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
