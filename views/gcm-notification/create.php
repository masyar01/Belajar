<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\GcmNotification */

$this->title = 'Create Gcm Notification';
$this->params['breadcrumbs'][] = ['label' => 'Gcm Notifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gcm-notification-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
