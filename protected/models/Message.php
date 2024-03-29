<?php

/**
 * This is the model class for table "t_tea_message".
 *
 * The followings are the available columns in table 't_tea_message':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $content
 * @property string $create_date
 * @property string $ip
 * @property integer $mark
 */
class Message extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Message the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_tea_message';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('content, name, email', 'required'),
			array('mark', 'numerical', 'integerOnly'=>true),
			array('name, ip', 'length', 'max'=>16),
			array('content','length','min'=>5),
			array('email', 'length', 'max'=>64),
			array('email','email'),
			array('id, name, email, content, create_date, ip, mark', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => '用户名',
			'email' => 'Email',
			'content' => '留言内容',
			'create_date' => '创建时间',
			'ip' => 'IP地址',
			'mark' => 'Mark',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($page=10)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('mark',0);
		$criteria->order='id desc';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
			    'pageSize'=>$page,
			 ),
		));
	}

}