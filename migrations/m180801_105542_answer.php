<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m180801_105542_answer
 */
class m180801_105542_answer extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180801_105542_answer cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('answer', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'q1' => Schema::TYPE_INTEGER,
            'q2' => Schema::TYPE_INTEGER,
            'q3' => Schema::TYPE_INTEGER,
            'q4' => Schema::TYPE_INTEGER,
            'q5' => Schema::TYPE_INTEGER,
            'q6' => Schema::TYPE_TEXT,
        ]);
        $this->addCommentOnColumn('answer','q1','Насколько удобна и понятна документация');
        $this->addCommentOnColumn('answer','q2','Насколько оперативно решаются возникающие у Вас вопросы');
        $this->addCommentOnColumn('answer','q3','Насколько Вы удовлетворены общением с сотрудниками  MEASOft');
        $this->addCommentOnColumn('answer','q4','Насколько Вы удовлетворены соотношением цены "Курьерской службы 2008" к функционалу и качеству обслуживания? ');
        $this->addCommentOnColumn('answer','q5','Вы порекоменудете MEASoft Вашим знакомым');
        $this->addCommentOnColumn('answer','q6','Что бы Вы хотели изменить или дополнить при работе с нами? ');
    }

    public function down()
    {
        $this->dropTable('answer');
    }
}
