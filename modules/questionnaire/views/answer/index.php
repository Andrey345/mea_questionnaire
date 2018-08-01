<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ответы';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .grid-view th{
        white-space: normal;
    }
    .table > thead > tr > th {
        vertical-align: top;
    }
</style>
<div class="answer-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'q1',
            'q2',
            'q3',
            'q4',
            'q5',
            'q6:ntext',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete} ',
            ],
        ],
    ]); ?>
</div>
