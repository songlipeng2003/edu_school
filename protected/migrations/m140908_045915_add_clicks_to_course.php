<?php

class m140908_045915_add_clicks_to_course extends CDbMigration
{public function up()
	{
		$this->addColumn('course', 'clicks', 'int NOT NULL DEFAULT 0');
	}

	public function down()
	{
		$this->dropColumn('course', 'clicks');

		return true;
	}
}