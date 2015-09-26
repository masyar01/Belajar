<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\Models\Categories;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\CategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Categories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description:ntext',
            [
                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                'value' => function ($data) {
                    return Categories::find()->where(['id' => $data->parent_id])->one()->name;
                }
            ],
            'created_at',
            // 'updated_at',
            // 'fee',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
