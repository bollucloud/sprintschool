<?php

class m141020_222916_AppConfigTable extends CDbMigration
{
	public function up()
	{
            $this->createTable('tbl_app_params', array(
                'id'=>'pk',
                'param'=>'string NOT NULL',
                'value'=>'string NOT NULL',
            ), 'ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('tbl_app_params');
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