<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\Models\StudentPayment */

$this->title = $student->first_name.' '.$student->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Student Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-payment-view">

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
            ['attribute'=>'Student Name','value'=>$student->first_name.' '.$student->last_name],
            'bank',
            'amount',
            'create_date',
            'is_validate',
        ],
    ]) ?>

</div>
