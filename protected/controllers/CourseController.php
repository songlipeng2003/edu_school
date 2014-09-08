<?php

class CourseController extends Controller
{
	public function actionIndex()
	{
		$criteria = new CDbCriteria();    
        $criteria->order = 'id desc';        
        $count = Course::model()->count($criteria);    
            
        $pager = new CPagination($count);    
        $pager->pageSize = 20;             
        $pager->applyLimit($criteria);    
    
        $courses = Course::model()->findAll($criteria); 

		$this->render('index', array(
			'courses'=>$courses,
		));
	}

	public function actionView($id)
	{
		$model=Course::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');

        $model->clicks = $model->clicks + 1;
        $model->save();

		$this->render('view', array(
			'model'=>$model,
		));
	}
}