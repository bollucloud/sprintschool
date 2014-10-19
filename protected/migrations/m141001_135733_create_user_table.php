<?php

class m141001_135733_create_user_table extends CDbMigration
{
	public function up()
	{
            $this->createTable('tbl_user', array(
            'id' => 'pk',
            'first_name' => 'string NOT NULL',
            'last_name' => 'string NOT NULL',
            'age' => 'int(11) NOT NULL',
            'type_id' => 'int(11) NOT NULL',
            'class_id' => 'int(11) NOT NULL',
            'create_time' => 'datetime DEFAULT NULL',
            'create_user_id' => 'int(11) DEFAULT NULL',
            'update_time' => 'datetime DEFAULT NULL',
            'update_user_id' => 'int(11) DEFAULT NULL',
            ), 'ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('tbl_user');
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