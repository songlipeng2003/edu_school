<?php

class SchoolController extends Controller
{
	public function actionIndex()
	{
		$schools = School::model()->findAll();

		$this->render('index', array(
			'schools'=>$schools
		));
	}
}