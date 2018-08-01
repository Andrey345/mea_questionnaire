<?php

namespace app\modules\questionnaire\controllers;

use app\modules\questionnaire\models\Answer;
use yii\web\Controller;
use Yii;

class QuestionnaireController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model=new Answer();
        if ($model->load(Yii::$app->request->post()) ) {
            if($model->save())
                return $this->redirect('/questionnaire/questionnaire/sent');
        }
        return $this->render('index',['model'=>$model]);
    }
    public function actionSent()
    {

        return $this->render('sent' );
    }
}
