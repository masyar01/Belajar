<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\PostJob */

$this->title = 'Create Post Job';
$this->params['breadcrumbs'][] = ['label' => 'Post Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-job-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
