<?php

class AboutUsController extends Controller
{
    public function actionIndex()
    {
        $intro = Yii::app()->settings->get('system', 'intro');

        $this->render('index', array(
            'intro'=>$intro,
        ));
    }
}