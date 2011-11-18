<?php

/**
 * This is the model class for table "t_tea_wiki_stat".
 *
 * The followings are the available columns in table 't_tea_wiki_stat':
 * @property integer $id
 * @property integer $wkid
 * @property integer $count
 * @property string $operate
 */
class WikiStat extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return WikiStat the static model class
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
		return 't_tea_wiki_stat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('wkid', 'required'),
			array('wkid, count', 'numerical', 'integerOnly'=>true),
			array('operate', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, wkid, count, operate', 'safe', 'on'=>'search'),
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
			'wkid' => '百科ID',
			'count' => '计数',
			'operate' => '操作',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('wkid',$this->wkid);
		$criteria->compare('count',$this->count);
		$criteria->compare('operate',$this->operate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}