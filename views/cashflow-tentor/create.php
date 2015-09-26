<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\CashflowTentor */

$this->title = 'Create Cashflow Tentor';
$this->params['breadcrumbs'][] = ['label' => 'Cashflow Tentors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cashflow-tentor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
