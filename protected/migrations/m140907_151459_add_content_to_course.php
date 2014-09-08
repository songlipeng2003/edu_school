<?php

class m140907_151459_add_content_to_course extends CDbMigration
{
	public function up()
	{
		$this->alterColumn('course', 'description', 'string NOT NULL');
		$this->addColumn('course', 'content', 'text');
	}

	public function down()
	{
		$this->alterColumn('course', 'description', 'text NOT NULL');
		$this->dropColumn('course', 'content');

		return true;
	}
}