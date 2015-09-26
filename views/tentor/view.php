<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Tentor;
use app\models\City;
use yii\helpers\ArrayHelper;

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
             'value' => Tentor::getSex($model->sex)    
            ],
            'birthday',
            'city_id',
						[
				'attribute'=>'city_name',
				'value'=>'City.city_name',
			],	
            'course_id',
            'email:email',
            'password',
            [
             'attribute' => 'status',
             'format'=>'raw',
             'value' => Tentor::getStatus($model->status)    
            ],
            [
             'attribute' => 'is_active',
             'format'=>'raw',
             'value' => Tentor::getActive($model->is_active)    
            ],
            [
             'attribute' => 'is_validate',
             'format'=>'raw',
             'value' => Tentor::getValidate($model->is_validate)    
            ],
            'created_at',
            'updated_at',
            'handphone',
            'code',
        ],
    ]) ?>

</div>
