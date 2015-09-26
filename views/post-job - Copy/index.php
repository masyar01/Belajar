<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\PostJobSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Post Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-job-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post Job', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'desc:ntext',
            'latitude',
            'longtitude',
            // 'student_id',
            // 'create_date',
            // 'update_date',
            // 'category_id',
            // 'city_id',
            // 'is_active',
            // 'is_taken',
            // 'course_date',
            // 'address:ntext',
            // 'phone',
            // 'fee',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
