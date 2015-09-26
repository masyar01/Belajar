<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\Models\TransactionFee */

$this->title = "Detail fee";
$this->params['breadcrumbs'][] = ['label' => 'Transaction Fees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaction-fee-view">

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
            'fee',
            'create_date',
            'update_date',
            ['attribute'=>'student name','value'=>$student->first_name.' '.$student->last_name],
            ['attribute'=>'tentor name','value'=>$tentor->first_name.' '.$tentor->last_name],
            ['attribute'=>'Status','value'=>$status],
            ['attribute'=>'Dibatalkan','value'=>$iscancel],
        ],
    ]) ?>

</div>
