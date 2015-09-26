<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\TransactionFee */

$this->title = 'Create Transaction Fee';
$this->params['breadcrumbs'][] = ['label' => 'Transaction Fees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaction-fee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
