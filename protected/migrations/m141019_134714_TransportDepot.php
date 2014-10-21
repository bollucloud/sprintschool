<?php

class m141019_134714_TransportDepot extends CDbMigration
{
	public function up()
	{
            $this->createTable('tbl_transport_fee_collections', array(
                'id' => 'pk',
                'name' => 'string NOT NULL',
                'batch_id' => 'int(11) NOT NULL',
                'start_date' => 'datetime DEFAULT NULL',
                'end_date' => 'datetime DEFAULT NULL',
                'due_date' => 'datetime DEFAULT NULL',
                'valid' => 'boolean NOT NULL DEFAULT true',
                'create_time' => 'datetime DEFAULT NULL',
                'create_user_id' => 'int(11) DEFAULT NULL',
                'update_time' => 'datetime DEFAULT NULL',
                'update_user_id' => 'int(11) DEFAULT NULL', 
            ));
            
            $this->createTable('tbl_transport_fee', array(
                'transaction_id' => 'pk',
                'payer_id' => 'int(11) NOT NULL',
                'transport_fare' => 'int(11) NOT NULL',
                'collection_id' => 'int(11) NOT NULL',
                'partial' => 'boolean DEFAULT false',
                'payment_method' => 'string',
                'create_time' => 'datetime DEFAULT NULL',
                'create_user_id' => 'int(11) DEFAULT NULL',
                'update_time' => 'datetime DEFAULT NULL',
                'update_user_id' => 'int(11) DEFAULT NULL', 
            ));
            
            $this->addForeignKey('fk_transport_collection_id', 'tbl_transport_fee', 'collection_id', 'tbl_user', 'id', 'CASCADE', 'CASCADE');
            
            $this->createTable('tbl_transports', array(
                'user_id' => 'int(11) NOT NULL',
                'route_id' => 'int(11) NOT NULL',
                'vehicle_id' => 'int(11) NOT NULL',
                'fare' => 'int(11) NOT NULL',
                'create_time' => 'datetime DEFAULT NULL',
                'create_user_id' => 'int(11) DEFAULT NULL',
                'update_time' => 'datetime DEFAULT NULL',
                'update_user_id' => 'int(11) DEFAULT NULL', 
            ));
            
            $this->createTable('tbl_routes', array(
                'id' => 'pk',
                'destination' => 'string',
                'cost' => 'int(11)',
                'create_time' => 'datetime DEFAULT NULL',
                'create_user_id' => 'int(11) DEFAULT NULL',
                'update_time' => 'datetime DEFAULT NULL',
                'update_user_id' => 'int(11) DEFAULT NULL', 
            ));
            
            $this->createTable('tbl_vehicles', array(
                'id' => 'pk',
                'registration_number' => 'string',
                'route_id' => 'int(11)',
                'occupancy' => 'int(11)',
                'status' => 'string',
                'create_time' => 'datetime DEFAULT NULL',
                'create_user_id' => 'int(11) DEFAULT NULL',
                'update_time' => 'datetime DEFAULT NULL',
                'update_user_id' => 'int(11) DEFAULT NULL', 
            ));
            
            $this->addForeignKey('fk_vehicle_route_id', 'tbl_vehicles', 'route_id', 'tbl_routes', 'id', 'CASCADE', 'CASCADE');
            
	}

	public function down()
	{
		echo "m141019_134714_TransportDepot does not support migration down.\n";
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