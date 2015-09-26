<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\StudentPayment */

$this->title = 'Create Student Payment';
$this->params['breadcrumbs'][] = ['label' => 'Student Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-payment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
