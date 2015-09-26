<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\Models\PostJob */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Post Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-job-view">

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
            'title',
            'desc:ntext',
            'latitude',
            'longtitude',
            'student_id',
            'create_date',
            'update_date',
            'category_id',
            'city_id',
            'is_active',
            'is_taken',
            'course_date',
            'address:ntext',
            'phone',
            'fee',
        ],
    ]) ?>

</div>
