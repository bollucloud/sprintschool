<?php

class m141001_145955_version_3 extends CDbMigration
{
	public function up()
	{
            $this->addForeignKey('fk_user_class_new', 'tbl_user', 'class_id', 'tbl_schoolclass', 'id', 'CASCADE', 'CASCADE');
	}

	public function down()
	{
		echo "m141001_145955_version_3 does not support migration down.\n";
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