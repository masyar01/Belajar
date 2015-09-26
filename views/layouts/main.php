<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    $navItems=[
        ['label' => 'Home', 'url' => ['/post-job/index']],
        // ['label' => 'Status', 'url' => ['/status/index']],
        // ['label' => 'About', 'url' => ['/site/about']],
        // ['label' => 'Contact', 'url' => ['/site/contact']]
      ];
      if (Yii::$app->user->isGuest) {
        array_push($navItems,['label' => 'Sign In', 'url' => ['/user/login']],
                             ['label' => 'Sign Up', 'url' => ['/user/register']]
                    );
      } else {
        array_push($navItems,
			['label' => 'Post Course', 'url' => ['/post-job/index']],
			['label' => 'Payment',
            'items' => [
                 ['label' => 'Student Payment Confirmation', 'url' => ['/student-payment/index']],
                 '<li class="divider"></li>',
                 ['label' => 'Cashflow Tentor', 'url' => ['/cashflow-tentor/index']],
				 '<li class="divider"></li>',
                 ['label' => 'Cashflow Student', 'url' => ['/cashflow-student/index']],
				],
			],
			['label' => 'Location',
            'items' => [
                 ['label' => 'City', 'url' => ['/city/index']],
                 '<li class="divider"></li>',
                 ['label' => 'Province', 'url' => ['/province/index']],
				],
			],
			['label' => 'User',
            'items' => [
                 ['label' => 'Tentor', 'url' => ['/tentor/index']],
                 '<li class="divider"></li>',
                 ['label' => 'Student', 'url' => ['/student/index']],
				 '<li class="divider"></li>',
				 ['label' => 'Users', 'url' => ['/user/admin/index']],
				],
			],
			['label' => 'Tentor Jobs', 'url' => ['/tentor-job/index']],
			['label' => 'Transaction', 'url' => ['/transaction-fee/index']],
            ['label' => 'Categories', 'url' => ['/categories/index']],
			['label' => 'GCM Notification', 'url' => ['/gcm-notification/index']],
			['label' => 'Account',
            'items' => [
                 ['label' => 'Profile', 'url' => ['/user/settings/profile']],
                 '<li class="divider"></li>',
                 ['label' => 'Logout (' . Yii::$app->user->identity->username . ')','url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']]
				],
			]
            
        );
      }
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav navbar-default'],
        'items' => $navItems,
    ]);
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; GO-Smart <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
