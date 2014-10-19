<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property integer $age
 * @property integer $type_id
 * @property integer $class_id
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 * @property string $password
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Assignment[] $assignments
 * @property Schoolclass[] $schoolclasses
 * @property Schoolclass[] $schoolclasses1
 * @property Schoolclass $class
 */
class User extends SmallschoolAR
{
        //Bollu - Declaring constants to use in type dropdown list and validation
        const NONE = 0;
        const ADMIN = 1;
        const TEACHER = 2;
        const STUDENT = 3;
        
        //Bollu - Confirm Password
        public $password_repeat;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, age, type_id, class_id, password, password_repeat, email', 'required'),
			array('age, type_id, class_id', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, email, password', 'length', 'max'=>255),
//			array('password', 'length', 'max'=>255),
//			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, age, type_id, class_id, create_time, create_user_id, update_time, update_user_id, password, email', 'safe', 'on'=>'search'),
                        array('email', 'email'),
                        array('email', 'unique'),
                        array('password', 'compare'),
                        array('password_repeat', 'safe'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'assignments' => array(self::HAS_MANY, 'Assignment', 'teacher_id'),
			'schoolclasses' => array(self::HAS_MANY, 'Schoolclass', 'teacher_id'),
			'schoolclasses1' => array(self::HAS_MANY, 'Schoolclass', 'topper_id'),
			'class' => array(self::BELONGS_TO, 'Schoolclass', 'class_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'age' => 'Age',
			'type_id' => 'Type',
			'class_id' => 'Class',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
			'password' => 'Password',
			'email' => 'Email',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('class_id',$this->class_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        //Bollu - Returns the user entries to use in dropdown lists @ Views
        public static function getUserOptions(){
            $list = CHtml::listData(User::model()->findAll(array('order' => 'first_name')), 'id', 'first_name');
            return $list;
        }
        
        //Bollu - Returns the type options while creating the user
        public function getTypeOptions(){
            return array(
                self::ADMIN => 'Admin',
                self::TEACHER => 'Teacher',
                self::STUDENT => 'Student',
            );
        }
        
        public function getTypeStatus($type){
            if(isset($type))
                if($type>=1 && $type<=3)
                    switch ($type){
                    case 0: return 'None';
                        break;
                    case 1: return 'Admin'; 
                        break;
                    case 2: return 'Teacher';
                        break;
                    case 3: return 'Student';
                        break;
                    }
                else
                    echo 'Type Undefined';
            else
                echo 'Type Undefined';
        }
        
        protected function afterValidate() {
            parent::afterValidate();
            if(!$this->hasErrors())
                $this->password = $this->hashPassword($this->password);
        }
        
        public function hashPassword($password){
            return md5($password);
        }
        
        public function validatePassword($password){
            return $this->hashPassword($password)===$this->password;
        }
        
}
