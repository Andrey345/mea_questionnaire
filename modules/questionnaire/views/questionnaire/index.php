<?php
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
?>
<div class="row ">
<div class="col-xs-6">
<h3>Нам важно узнать Ваше мнение! </h3>
<h5>Добрый день! Для повышения уровня оказываемых услуг предлагаем пройти короткий опрос доступный по ссылке. Ваши ответы помогут сделать сервис еще лучше!</h5>
<?php $form = ActiveForm::begin([

]); ?>

<?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
<?= $form->field($model, 'email')->textInput() ?>
<?= $form->field($model, 'q1')->dropDownList([
        '1' => '1',
        '2' => '2',
        '3'=>'3',
        '4' => '4',
        '5' => '5',
    ]); ?>
    <?= $form->field($model, 'q2')->dropDownList([
        '1' => '1',
        '2' => '2',
        '3'=>'3',
        '4' => '4',
        '5' => '5',
    ]); ?><?= $form->field($model, 'q3')->dropDownList([
        '1' => '1',
        '2' => '2',
        '3'=>'3',
        '4' => '4',
        '5' => '5',
    ]); ?>


    <?= $form->field($model, 'q4')->dropDownList([
        '1' => '1',
        '2' => '2',
        '3'=>'3',
        '4' => '4',
        '5' => '5',
    ]); ?>


    <?= $form->field($model, 'q5')->dropDownList([
        '1' => '1',
        '2' => '2',
        '3'=>'3',
        '4' => '4',
        '5' => '5',
    ]); ?>
    <?= $form->field($model, 'q6')-> textarea() ?>



        <?= Html::submitButton('Завершить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>


<?php ActiveForm::end(); ?>


<h5>Так же если у Вас есть или появлятся предложения можете всегда направить их на почту natalia@courierexe.ru и они будут рассмотрены!</h5>
</div>
</div>