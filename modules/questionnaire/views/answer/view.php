<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\modules\questionnaire\models\Answer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo \yii\widgets\Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])
?>


<div class="answer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'email:email',
            'q1',
            'q2',
            'q3',
            'q4',
            'q5',
            'q6:ntext',
        ],
    ]) ?>

</div>
