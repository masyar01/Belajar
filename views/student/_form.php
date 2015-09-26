<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\City;
use app\models\Categories;
use app\models\Student;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
$city = City::find()->all();
$listData = ArrayHelper::map($city,'id', 'city_name');

$categories = Categories::find()->all();
$listCat = ArrayHelper::map($categories,'id', 'name');
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->dropdownList(Student::isSex()) ?>

    <?= $form->field($model, 'birthday')->widget(\yii\jui\DatePicker::classname(), [
            'language' => 'en',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' =>[
                'changeMonth'=> true,
                'changeYear'=> true,
                'style'=>'width:100px;',
            ]
        ]); ?>
        
    <?= $form->field($model, 'city_id')->dropDownList(
                                        $listData, ['prompt' => 'Select ...']
                                        ); ?>

    <?= $form->field($model, 'course_id')->dropDownList(
                                            $listCat,['prompt' => 'Select ...']
                                            ); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropdownList(Student::isStatus()) ?>

    <?= $form->field($model, 'is_active')->dropdownList(Student::isActive()) ?>

    <?= $form->field($model, 'is_validate')->dropdownList(Student::isValidate()) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'handphone')->textInput() ?>

    <?= $form->field($model, 'code')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
