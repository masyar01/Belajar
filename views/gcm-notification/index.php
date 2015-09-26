<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\GcmNotificationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gcm Notifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gcm-notification-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gcm Notification', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gcm_id',
            'user_id',
            'create_date',
            'is_active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
