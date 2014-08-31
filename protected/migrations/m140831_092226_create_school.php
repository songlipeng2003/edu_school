<?php

class m140831_092226_create_school extends CDbMigration
{
	public function up()
	{
		$this->createTable('school', array(
			'id'=>'pk',
			'title'=>'string NOT NULL',
			'address'=>'string NOT NULL',
			'traffic'=>'string',
			'created_at'=>'datetime NOT NULL',
			'updated_at'=>'datetime',
		));
	}

	public function down()
	{
		$this->dropTable('school');
		return true;
	}
}