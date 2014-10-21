<?php

/**
 * This is the model class for table "tbl_transport_fee".
 *
 * The followings are the available columns in table 'tbl_transport_fee':
 * @property integer $transaction_id
 * @property integer $payer_id
 * @property integer $transport_fare
 * @property integer $collection_id
 * @property integer $partial
 * @property string $payment_method
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 *
 * The followings are the available model relations:
 * @property User $collection
 */
class TransportFee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_transport_fee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('payer_id, transport_fare, collection_id', 'required'),
			array('payer_id, transport_fare, collection_id, partial, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('payment_method', 'length', 'max'=>255),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('transaction_id, payer_id, transport_fare, collection_id, partial, payment_method, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'collection' => array(self::BELONGS_TO, 'User', 'collection_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'transaction_id' => 'Transaction',
			'payer_id' => 'Payer',
			'transport_fare' => 'Transport Fare',
			'collection_id' => 'Collection',
			'partial' => 'Partial',
			'payment_method' => 'Payment Method',
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

		$criteria->compare('transaction_id',$this->transaction_id);
		$criteria->compare('payer_id',$this->payer_id);
		$criteria->compare('transport_fare',$this->transport_fare);
		$criteria->compare('collection_id',$this->collection_id);
		$criteria->compare('partial',$this->partial);
		$criteria->compare('payment_method',$this->payment_method,true);
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
	 * @return TransportFee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
