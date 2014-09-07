<?php

class QaController extends Controller
{
	public function actionIndex()
	{
		$criteria = new CDbCriteria();    
        $criteria->order = 'created_at desc';        
        $count = Qa::model()->count($criteria);    
            
        $pager = new CPagination($count);    
        $pager->pageSize = 20;             
        $pager->applyLimit($criteria);    
    
        $qas = Qa::model()->findAll($criteria); 

		$this->render('index', array(
			'qas'=>$qas,
		));
	}
}