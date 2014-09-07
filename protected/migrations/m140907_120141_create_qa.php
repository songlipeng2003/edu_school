<?php

class m140907_120141_create_qa extends CDbMigration
{
	public function up()
	{
		$this->createTable('qa', array(
			'id'=>'pk',
			'nickname'=>'string NOT NULL',
			'email'=>'string',
			'phone'=>'string',
			'course_id'=>'int',
			'question'=>'string NOT NULL',
			'answer'=>'text NOT NULL',
			'created_at'=>'datetime NOT NULL',
			'answered_at'=>'datetime',
			'updated_at'=>'datetime',
		));
	}

	public function down()
	{
		$this->dropTable('qa');
		return true;
	}
}