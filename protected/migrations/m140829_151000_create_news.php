<?php

class m140829_151000_create_news extends CDbMigration
{
	public function up()
	{
		$this->createTable('news', array(
			'id'=>'pk',
			'title'=>'string NOT NULL',
			'content'=>'text NOT NULL',
			'created_at'=>'datetime NOT NULL',
			'updated_at'=>'datetime',
			'post_time'=>'datetime'
		));
	}

	public function down()
	{
		$this->dropTable('news');
		return true;
	}
}