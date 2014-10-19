<?php

class m141001_141042_version_2 extends CDbMigration
{
	public function up()
	{
            
            $this->createTable('tbl_schoolclass', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'Description' => 'text NOT NULL',
            'room_no' => 'int(11) NOT NULL',
            'teacher_id' => 'int(11) NOT NULL',
            'topper_id' => 'int(11) NOT NULL',
            'create_time' => 'datetime DEFAULT NULL',
            'create_user_id' => 'int(11) DEFAULT NULL',
            'update_time' => 'datetime DEFAULT NULL',
            'update_user_id' => 'int(11) DEFAULT NULL',
            ), 'ENGINE=InnoDB');
            
            $this->createTable('tbl_assignment', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'Description' => 'text NOT NULL',
            'class_id' => 'int(11) NOT NULL',
            'teacher_id' => 'int(11) NOT NULL',
            'last_date' => 'datetime DEFAULT NULL',
            'create_time' => 'datetime DEFAULT NULL',
            'create_user_id' => 'int(11) DEFAULT NULL',
            'update_time' => 'datetime DEFAULT NULL',
            'update_user_id' => 'int(11) DEFAULT NULL',
            ), 'ENGINE=InnoDB');
            
            
            $this->addForeignKey('fk_classteacher_user', 'tbl_schoolclass', 'teacher_id', 'tbl_user', 'id', 'CASCADE', 'RESTRICT');
            $this->addForeignKey('fk_classtopper_user', 'tbl_schoolclass', 'topper_id', 'tbl_user', 'id', 'CASCADE', 'RESTRICT');
            $this->addForeignKey('fk_assignment_class', 'tbl_assignment', 'class_id', 'tbl_schoolclass', 'id', 'CASCADE', 'RESTRICT');
 
            
	}

	public function down()
	{
		$this->truncateTable('tbl_schoolclass');
                $this->truncateTable('tbl_assignment');
                $this->dropTable('tbl_schoolclass');
                $this->dropTable('tbl_assignment');
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