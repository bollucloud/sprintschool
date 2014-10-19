<?php

class m141010_221822_version_5 extends CDbMigration
{
	public function up()
	{
            $this->addColumn('tbl_user', 'password', 'VARCHAR(20) NOT NULL');
            $this->addColumn('tbl_user', 'email', 'string NOT NULL');
	}

	public function down()
	{
		echo "m141010_221822_version_5 does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}