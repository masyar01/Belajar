<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\TentorSearch;
use app\models\Tentor;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TentorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tentors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tentor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tentor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'birthday',
            'email:email',
            [
                'attribute'=>'is_active',
                'label'=>'Active',
                'format'=>'raw',//raw, html
                'content'=>function($data){
                    return Tentor::getActive($data->is_active);
                }
            ],

            // 'city_id',
            // 'course_id',
            // 'password',
            // 'status',
            // 'is_validate',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
