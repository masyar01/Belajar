<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\CashflowTentor */

$this->title = 'Update Cashflow Tentor: ' . ' ' . $tentor->first_name .' '. $tentor->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Cashflow Tentors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cashflow-tentor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
