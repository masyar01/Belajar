<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\TentorJobSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tentor Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tentor-jobs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tentor Jobs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'title',
                'value' => 'postJob.title',
            ],
            [
                'attribute' => 'student_name',
                'value' => 'student.first_name',
            ],
            [
                'attribute' => 'tentor_name',
                'value' => 'tentor.first_name',
            ],
            [
                'attribute' => 'course_date',
                'value' => 'postJob.course_date',
            ],
            'create_date',
            // 'is_active',
            // 'is_complete',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
