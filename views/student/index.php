<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Student;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            [
                'attribute'=>'sex',
                'label'=>'sex',
                'format'=>'raw',//raw, html
                'content'=>function($data){
                    return Student::getSex($data->sex);
                }
            ],
            'birthday',
            // 'city_id',
            // 'course_id',
            // 'email:email',
            // 'address:ntext',
            // 'status',
            // 'is_active',
            // 'is_validate',
            // 'created_at',
            // 'updated_at',
            // 'phone',
            // 'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
