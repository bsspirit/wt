<?php

/**
 * This is the model class for table "t_tea_wiki".
 *
 * The followings are the available columns in table 't_tea_wiki':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $title
 * @property string $content
 * @property string $image
 * @property string $repost
 * @property string $create_date
 * @property string $ip
 * @property integer $mark
 */
class Wiki extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Wiki the static model class
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
		return 't_tea_wiki';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, title, content, create_date', 'required'),
			array('mark', 'numerical', 'integerOnly'=>true),
			array('name, title, ip', 'length', 'max'=>16),
			array('email', 'length', 'max'=>64),
			array('image, repost', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, email, title, content, image, repost, create_date, ip, mark', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'email' => 'Email',
			'title' => 'Title',
			'content' => 'Content',
			'image' => 'Image',
			'repost' => 'Repost',
			'create_date' => 'Create Date',
			'ip' => 'Ip',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('repost',$this->repost,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('mark',$this->mark);
		$criteria->order='id desc';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
			    'pageSize'=>$page,
			 ),
		));
	}

}