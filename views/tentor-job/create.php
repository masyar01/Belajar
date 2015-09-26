<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\TentorJobs */

$this->title = 'Create Tentor Jobs';
$this->params['breadcrumbs'][] = ['label' => 'Tentor Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tentor-jobs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
