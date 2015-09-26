<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\Models\Categories;
/* @var $this yii\web\View */
/* @var $model app\Models\Categories */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-view">

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
            'id',
            'name',
            'description:ntext',
            [
                'label' => 'Parent Id',
                'value' => Categories::find()->where(['id' => $model->parent_id])->one()->name,  
            ],
            'created_at',
            'updated_at',
            'fee',
        ],
    ]) ?>

</div>
