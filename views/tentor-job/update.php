<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\TentorJobs */

$this->title = 'Update Tentor Jobs: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tentor Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tentor-jobs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
