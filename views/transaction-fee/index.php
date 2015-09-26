<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\TransactionFeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transaction Fees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaction-fee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transaction Fee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute'=>'first_name_student','value'=>'student.first_name'],
            ['attribute'=>'first_name_tentor','value'=>'tentor.first_name'],
            'fee',
            'create_date',
            'update_date',
            // 'tentor_id',
            // 'is_active',
            // 'is_cancel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
