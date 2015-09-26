<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form ActiveForm */
?>
<div class="student">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'address') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'sex') ?>
        <?= $form->field($model, 'city_id') ?>
        <?= $form->field($model, 'course_id') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'is_active') ?>
        <?= $form->field($model, 'is_validate') ?>
        <?= $form->field($model, 'birthday') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'updated_at') ?>
        <?= $form->field($model, 'last_name') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- student -->
