<?php

/**
 * This is the model class for table "tbl_schoolclass".
 *
 * The followings are the available columns in table 'tbl_schoolclass':
 * @property integer $id
 * @property string $name
 * @property string $Description
 * @property integer $room_no
 * @property integer $teacher_id
 * @property integer $topper_id
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 *
 * The followings are the available model relations:
 * @property Assignment[] $assignments
 * @property User $teacher
 * @property User $topper
 * @property User[] $users
 */
class Schoolclass extends SmallschoolAR
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_schoolclass';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, Description, room_no, teacher_id', 'required'),
			array('room_no, teacher_id, topper_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
//			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, Description, room_no, teacher_id, topper_id, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'assignments' => array(self::HAS_MANY, 'Assignment', 'class_id'),
			'teacher' => array(self::BELONGS_TO, 'User', 'teacher_id'),
			'topper' => array(self::BELONGS_TO, 'User', 'topper_id'),
			'users' => array(self::HAS_MANY, 'User', 'class_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'Description' => 'Description',
			'room_no' => 'Room No',
			'teacher_id' => 'Teacher',
			'topper_id' => 'Topper',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('room_no',$this->room_no);
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('topper_id',$this->topper_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Schoolclass the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        //Bollu - returns the class options to dropdown list @ Views
        public static function getCLassOptions(){
            $list = CHtml::listData(Schoolclass::model()->findAll(array('order'=>'name')), 'id', 'name');
            return $list;
        }
}
