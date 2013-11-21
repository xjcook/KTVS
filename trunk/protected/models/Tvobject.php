<?php

/**
 * This is the model class for table "tbl_tvobject".
 *
 * The followings are the available columns in table 'tbl_tvobject':
 * @property integer $id
 * @property integer $sport_id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $map
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Schedule[] $schedules
 * @property Sport $sport
 */
class Tvobject extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_tvobject';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sport_id, name', 'required'),
			array('sport_id', 'numerical', 'integerOnly'=>true),
			array('name, image', 'length', 'max'=>255),
			array('description, map', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, sport_id, name, description, image, map, updated_at', 'safe', 'on'=>'search'),
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
			'schedules' => array(self::HAS_MANY, 'Schedule', 'tvobject_id'),
			'sport' => array(self::BELONGS_TO, 'Sport', 'sport_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sport_id' => 'Sport',
			'name' => 'Name',
			'description' => 'Description',
			'image' => 'Image',
			'map' => 'Map',
			'updated_at' => 'Updated At',
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
		$criteria->compare('sport_id',$this->sport_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('map',$this->map,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tvobject the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
