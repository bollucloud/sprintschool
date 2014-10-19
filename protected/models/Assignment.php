<?php

/**
 * This is the model class for table "tbl_assignment".
 *
 * The followings are the available columns in table 'tbl_assignment':
 * @property integer $id
 * @property string $name
 * @property string $Description
 * @property integer $class_id
 * @property integer $teacher_id
 * @property string $last_date
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 *
 * The followings are the available model relations:
 * @property Schoolclass $class
 * @property User $teacher
 */
class Assignment extends SmallschoolAR
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_assignment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, Description, class_id, teacher_id', 'required'),
			array('class_id, teacher_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('last_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, Description, class_id, teacher_id, last_date, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'class' => array(self::BELONGS_TO, 'Schoolclass', 'class_id'),
			'teacher' => array(self::BELONGS_TO, 'User', 'teacher_id'),
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
			'class_id' => 'Class',
			'teacher_id' => 'Teacher',
			'last_date' => 'Last Date',
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
		$criteria->compare('class_id',$this->class_id);
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('last_date',$this->last_date,true);
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
	 * @return Assignment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
