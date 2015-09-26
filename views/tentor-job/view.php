<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\Models\TentorJobs */

$this->title = $tentor->first_name.' '.$tentor->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Tentor Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tentor-jobs-view">

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
            ['attribute'=>'Judul','value'=>$postjob->title.' | '.$postjob->desc],
            ['attribute'=>'Tentor Name','value'=>$tentor->first_name.' '.$tentor->last_name],
            ['attribute'=>'Student Name','value'=>$student->first_name.' '.$student->last_name],
            ['attribute'=>'Course Date','value'=>$postjob->course_date],
            ['attribute'=>'Status','value'=>$status],
            ['attribute'=>'Complete','value'=>$iscomplete],
            'create_date',
        ],
    ]) ?>

</div>
