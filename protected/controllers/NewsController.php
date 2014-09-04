<?php

class NewsController extends Controller
{
	public function actionIndex()
	{
		$criteria = new CDbCriteria();    
        $criteria->order = 'post_time desc';        
        $count = News::model()->count($criteria);    
            
        $pager = new CPagination($count);    
        $pager->pageSize = 20;             
        $pager->applyLimit($criteria);    
    
        $newsList = News::model()->findAll($criteria); 

		$this->render('index', array(
			'newsList'=>$newsList,
		));
	}

	public function actionView($id)
	{
		$model=News::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');

		$this->render('view', array(
			'model'=>$model,
		));
	}
}