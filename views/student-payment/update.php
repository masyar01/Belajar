<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\StudentPayment */

$this->title = 'Update Student Payment: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Student Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-payment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
