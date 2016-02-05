<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <?php Pjax::begin() ?>

        <?= GridView::widget([
                'dataProvider' 	=> $dataProvider,
                'filterModel'  	=> $searchModel,
                'layout'  		=> "{items}\n{pager}",
                'tableOptions' => ['class' => 'table table-striped'],
                'columns' => ['username', 'email']
            ]); ?>

        <?php Pjax::end() ?>

    </div>
</div>
