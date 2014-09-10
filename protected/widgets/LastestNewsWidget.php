<?php
class LastestNewsWidget extends CWidget
{
    public function init()
    {

    }

    public function run()
    {
        $criteria = new CDbCriteria();    
        $criteria->order = 'post_time desc';   
            
        $criteria->limit = 10;    
    
        $lastestNewsList = News::model()->findAll($criteria); 

        $this->render('latestNews', array(
            'lastestNewsList'=>$lastestNewsList
        ));
    }
}