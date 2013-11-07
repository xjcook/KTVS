<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $is_admin
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property TblEvent[] $tblEvents
 * @property TblLeague[] $tblLeagues
 * @property TblNews[] $tblNews
 * @property TblPage[] $tblPages
 * @property TblUserCourse[] $tblUserCourses
 * @property TblUserSport[] $tblUserSports
 */
class User extends CActiveRecord
{
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
			array('email, password', 'required'),
			array('is_admin', 'numerical', 'integerOnly'=>true),
			array('name, email, password', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, is_admin, updated_at', 'safe', 'on'=>'search'),
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
			'tblEvents' => array(self::HAS_MANY, 'TblEvent', 'user_id'),
			'tblLeagues' => array(self::HAS_MANY, 'TblLeague', 'user_id'),
			'tblNews' => array(self::HAS_MANY, 'TblNews', 'user_id'),
			'tblPages' => array(self::HAS_MANY, 'TblPage', 'user_id'),
			'tblUserCourses' => array(self::HAS_MANY, 'TblUserCourse', 'user_id'),
			'tblUserSports' => array(self::HAS_MANY, 'TblUserSport', 'user_id'),
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
			'password' => 'Password',
			'is_admin' => 'Is Admin',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('is_admin',$this->is_admin);
		$criteria->compare('updated_at',$this->updated_at,true);

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
}
