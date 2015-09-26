<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tentor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tentors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tentor-view">

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

       <!--  <?= Html::a('SendVerificationCode', ['SendVerificationCode', 'id' => $model->id], [
            'class' => 'btn btn-default',
            'data' => [
                'confirm' => 'Kirim code verifikasi ke '.$model->email.' ?',
                'method' => 'post',
            ],
        ]) ?> -->
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
             'value' => $model->sex == 1 ? 'Male' : 'Female'	
			],
            'birthday',
            'city_id',
            'course_id',
            'email:email',
            'password',
            'status',
			[
             'attribute' => 'sex',
             'format'=>'raw',
             'value' => $model->is_active == 1 ? 'Active' : 'Not Active'	
			],
            'is_validate',
            'created_at',
            'updated_at',
            'handphone',
            'code',
        ],
    ]) ?>

</div>
