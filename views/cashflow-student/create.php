<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\CashflowStudent */

$this->title = 'Create Cashflow Student';
$this->params['breadcrumbs'][] = ['label' => 'Cashflow Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cashflow-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
