<?php

class DocController extends Controller
{
    public function actionAboutUs()
    {
        $intro = Yii::app()->settings->get('system', 'intro');

        $this->render('index', array(
            'intro'=>$intro,
        ));
    }

    public function actionEnv()
    {
        $env = Yii::app()->settings->get('system', 'env');

        $this->render('env', array(
            'env'=>$env,
        ));
    }
}