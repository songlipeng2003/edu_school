<?php
class SettingsController extends AdminController
{
    public $layout = '/layouts/column1';

    public function actionIndex()
    {
        $model=new SettingForm;

        if(isset($_POST['SettingForm']))
        {
            $model->attributes=$_POST['SettingForm'];
            if($model->save()){
                Yii::app()->user->setFlash('success', '保存成功');
            }
        }

        $model->attributes=Yii::app()->settings->get('system');

        $this->render('index',array(
            'model'=>$model,
        ));
    }
}