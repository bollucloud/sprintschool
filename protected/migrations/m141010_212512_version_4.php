<?php

class m141010_212512_version_4 extends CDbMigration
{
	public function up()
	{
            $this->addForeignKey('fk_assignment_user_new', 'tbl_assignment', 'teacher_id', 'tbl_user', 'id', 'CASCADE', 'CASCADE');
	}

	public function down()
	{
		echo "m141010_212512_version_4 does not support migration down.\n";
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