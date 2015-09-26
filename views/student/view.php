<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Student;

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'last_name',
            [
             'attribute' => 'sex',
             'format'=>'raw',
             'value' => Student::getSex($model->sex)    
            ],
            'birthday',
            'city_id',
            'course_id',
            'email:email',
            'address:ntext',
            [
             'attribute' => 'status',
             'format'=>'raw',
             'value' => Student::getStatus($model->status)    
            ],
            [
             'attribute' => 'is_active',
             'format'=>'raw',
             'value' => Student::getActive($model->is_active)    
            ],
            [
             'attribute' => 'is_validate',
             'format'=>'raw',
             'value' => Student::getValidate($model->is_validate)    
            ],
            'created_at',
            'updated_at',
            'phone',
            'password',
            'handphone',
            'code',
        ],
    ]) ?>

</div>
