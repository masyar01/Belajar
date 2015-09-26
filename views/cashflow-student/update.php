<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\CashflowStudent */

$this->title = 'Update Cashflow Student: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cashflow Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cashflow-student-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
