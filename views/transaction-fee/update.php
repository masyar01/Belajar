<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\TransactionFee */

$this->title = 'Update Transaction Fee: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transaction Fees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaction-fee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
