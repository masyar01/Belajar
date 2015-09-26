<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\StudentPaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Payments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-payment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Payment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',[
                'attribute' => 'first_name',
                'value' => 'student.first_name',
            ],
            [
                'attribute' => 'last_name',
                'value' => 'student.last_name',
            ],
            'bank',
            'amount',
            'create_date',
            // 'is_validate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
