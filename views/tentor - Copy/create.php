<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tentor */

$this->title = 'Create Tentor';
$this->params['breadcrumbs'][] = ['label' => 'Tentors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tentor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
