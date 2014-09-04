<?php

class m140904_140134_add_description_to_news extends CDbMigration
{
	public function up()
	{
		$this->addColumn('news', 'description', 'string');
	}

	public function down()
	{
		$this->removeColumn('news', 'description');

		return true;
	}
}