<?php

class QaController extends Controller
{
	public function actionIndex()
	{
		$criteria = new CDbCriteria();    
        $criteria->condition = "answer!=''";
        $criteria->order = 'created_at desc';        
        $count = Qa::model()->count($criteria);    
            
        $pager = new CPagination($count);    
        $pager->pageSize = 20;             
        $pager->applyLimit($criteria);    
    
        $qas = Qa::model()->findAll($criteria);

        $model = new Qa;

		$this->render('index', array(
			'qas'=>$qas,
            'model'=>$model,
		));
	}

    public function actionCreate()
    {
        $model=new Qa;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Qa']))
        {
            $model->attributes=$_POST['Qa'];
            if($model->save())
            {
                Yii::app()->user->setFlash('success', '提问已经成功');
                $this->redirect(array('index'));
            }
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }
}