<?php

namespace app\modules\questionnaire\models;

use Yii;
use yii\db\ActiveRecord;


class Answer extends ActiveRecord
{
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'q1', 'q2','q3','q4','q5'], 'required'],
            ['email', 'email'],
            [['q1', 'q2','q3','q4','q5'],'integer'],
            [['name','q6'],'string'],
            ['q6', 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Ваше имя',
            'email' => 'Ваш E-mail',
            'q1' => 'Насколько удобна и понятна документация на wiki.courierexe.ru',
            'q2' => 'Насколько оперативно решаются возникающие у Вас вопросы',
            'q3' => 'Насколько Вы удовлетворены общением с сотрудниками  MEASOft',
            'q4' => 'Насколько Вы удовлетворены соотношением цены "Курьерской службы 2008" к функционалу и качеству обслуживания? ',
            'q5' => 'Вы порекоменудете MEASoft Вашим знакомым',
            'q6' => 'Что бы Вы хотели изменить или дополнить при работе с нами?',
        ];
    }


}
