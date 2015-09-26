<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\CashflowTentorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cashflow Tentors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cashflow-tentor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cashflow Tentor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tentor_id',[
                'attribute' => 'first_name',
                'value' => 'tentor.first_name',
            ],
            [
                'attribute' => 'last_name',
                'value' => 'tentor.last_name',
            ],
            'balance',
            'create_date',
            'update_date',
            // 'is_active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
