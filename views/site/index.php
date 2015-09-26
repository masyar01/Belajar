<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Smartteach';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Smartteach</h1>

        <p class="lead"></p>

        <p><?php echo Html::a('Login', ['/user/login'], ['class'=>'btn btn-lg btn-success']) ?></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2></h2>

                <p></p>

                <!-- <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p> -->
            </div>
            <div class="col-lg-4">
                <h2></h2>

                <p></p>

                <!-- <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p> -->
            </div>
            <div class="col-lg-4">
                <h2></h2>

                <p></p>

                <!-- <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p> -->
            </div>
        </div>

    </div>
</div>
