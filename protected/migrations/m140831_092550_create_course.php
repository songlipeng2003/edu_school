<?php

class m140831_092550_create_course extends CDbMigration
{
	public function up()
	{
		$this->createTable('course', array(
			'id'=>'pk',
			'title'=>'string NOT NULL',
			'description'=>'text NOT NULL',
			'class_number'=>'int NOT NULL',
			'created_at'=>'datetime NOT NULL',
			'updated_at'=>'datetime',
		));
	}

	public function down()
	{
		$this->dropTable('course');
		return true;
	}
}