<?php
class RbacCommand extends CConsoleCommand
{
   
    private $_authManager;
 
    
	public function getHelp()
	{
		
		$description = "DESCRIPTION\n";
		$description .= '    '."This command generates an initial RBAC authorization hierarchy.\n";
		return parent::getHelp() . $description;
	}

	
	/**
	 * The default action - create the RBAC structure.
	 */
	public function actionIndex()
	{
		 
		$this->ensureAuthManagerDefined();
		
		//provide the oportunity for the use to abort the request
		$message = "This command will create three roles: Admin, Teacher, and Student\n";
		$message .= " and the following permissions:\n";
		$message .= "create, read, update and delete user\n";
		$message .= "create, read, update and delete class\n";
		$message .= "create, read, update and delete assignment\n";
		$message .= "Would you like to continue?";
	    
	    //check the input from the user and continue if 
		//they indicated yes to the above question
	    if($this->confirm($message)) 
		{
		     //first we need to remove all operations, 
			 //roles, child relationship and assignments
			 $this->_authManager->clearAll();

			 //create the lowest level operations for users
			 $this->_authManager->createOperation(
				"createUser",
				"create a new user"); 
			 $this->_authManager->createOperation(
				"readUser",
				"read user profile information"); 
			 $this->_authManager->createOperation(
				"updateUser",
				"update a users in-formation"); 
			 $this->_authManager->createOperation(
				"deleteUser",
				"remove a user from a class"); 

			 //create the lowest level operations for classes
			 $this->_authManager->createOperation(
				"createSchoolclass",
				"create a new class"); 
			 $this->_authManager->createOperation(
				"readSchoolclass",
				"read class information"); 
	 		 $this->_authManager->createOperation(
				"updateSchoolclass",
				"update class information"); 
			 $this->_authManager->createOperation(
				"deleteSchoolclass",
				"delete a class"); 

			 //create the lowest level operations for assignments
			 $this->_authManager->createOperation(
				"createAssignment",
				"create a new assignment"); 
			 $this->_authManager->createOperation(
				"readAssignment",
				"read assignment information"); 
			 $this->_authManager->createOperation(
				"updateAssignment",
				"update assignment information"); 
			 $this->_authManager->createOperation(
				"deleteAssignment",
				"delete an assignment from a class");     

			 //create the reader role and add the appropriate 
			 //permissions as children to this role
			 $role=$this->_authManager->createRole("student"); 
			 $role->addChild("readUser");
			 $role->addChild("readSchoolclass"); 
			 $role->addChild("readAssignment"); 

			 //create the member role, and add the appropriate 
			 //permissions, as well as the reader role itself, as children
			 $role=$this->_authManager->createRole("teacher"); 
			 $role->addChild("student"); 
			 $role->addChild("createAssignment"); 
			 $role->addChild("updateAssignment"); 
			 $role->addChild("deleteAssignment"); 
                         $role->addChild("updateUser");
                         $role->addChild("updateSchoolclass"); 

			 //create the owner role, and add the appropriate permissions, 
			 //as well as both the reader and member roles as children
			 $role=$this->_authManager->createRole("admin"); 
			 $role->addChild("student"); 
			 $role->addChild("teacher");    
			 $role->addChild("createUser"); 
			 $role->addChild("deleteUser");  
			 $role->addChild("createSchoolclass");
			 $role->addChild("deleteSchoolclass");	
		
		     //provide a message indicating success
		     echo "Authorization hierarchy successfully generated.\n";
        }
 		else
			echo "Operation cancelled.\n";
    }

	public function actionDelete()
	{
		$this->ensureAuthManagerDefined();
		$message = "This command will clear all RBAC definitions.\n";
		$message .= "Would you like to continue?";
	    //check the input from the user and continue if they indicated 
	    //yes to the above question
	    if($this->confirm($message)) 
	    {
			$this->_authManager->clearAll();
			echo "Authorization hierarchy removed.\n";
		}
		else
			echo "Delete operation cancelled.\n";
			
	}
	
	protected function ensureAuthManagerDefined()
	{
		//ensure that an authManager is defined as this is mandatory for creating an auth heirarchy
		if(($this->_authManager=Yii::app()->authManager)===null)
		{
		    $message = "Error: an authorization manager, named 'authManager' must be con-figured to use this command.";
			$this->usageError($message);
		}
	}
}
