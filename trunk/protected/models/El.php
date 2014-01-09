<?php

/**
 * This is the model class for table "tbl_el".
 *
 * The followings are the available columns in table 'tbl_el':
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $description
 * @property integer $type
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property User[] $users
 * @property Page[] $pages
 * @property Student[] $students
 */
class El extends CActiveRecord
{
	/**
	 * @property userIds
	 */
	public $userIds = array();

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_el';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, type, users', 'required'),
			array('type', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('description, userIds', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('name, description, updated_at', 'safe', 'on'=>'search'),
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
			'users' => array(self::MANY_MANY, 'User', 'tbl_user_el(el_id, user_id)'),
			'pages' => array(self::MANY_MANY, 'Page', 'tbl_page_el(el_id, page_id)'),
			'students' => array(self::MANY_MANY, 'Student', 'tbl_student_el(el_id, student_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'users' => 'Používatelia',
			'name' => 'Názov',
			'description' => 'Popis',
			'type' => 'Typ',
			'updated_at' => 'Posledná úprava',
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

		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		if (Yii::app()->controller->id == 'event')
			$criteria->compare('type','0',true);
		else 
			$criteria->compare('type','1',true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return El the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * Returns a list of behaviors that this model should behave as.
	 * The return value should be an array of behavior configurations indexed by
	 * behavior names. Each behavior configuration can be either a string specifying
	 * the behavior class or an array of the following structure:
	 * <pre>
	 * 'behaviorName'=>array(
	 *     'class'=>'path.to.BehaviorClass',
	 *     'property1'=>'value1',
	 *     'property2'=>'value2',
	 * )
	 * </pre>
	 *
	 * Note, the behavior classes must implement {@link IBehavior} or extend from
	 * {@link CBehavior}. Behaviors declared in this method will be attached
	 * to the model when it is instantiated.
	 *
	 * For more details about behaviors, see {@link CComponent}.
	 * @return array the behavior configurations (behavior name=>behavior configuration)
	 */
	public function behaviors()
	{
		return array(
			'activerecord-relation'=>array(
				'class'=>'ext.yiiext.behaviors.activerecord-relation.EActiveRecordRelationBehavior',
			),
		);
	}

	/**
	 * Override afterFind()
	 * @see CActiveRecord::afterFind()
	 */
	protected function afterFind()
	{
		// set userIds[]
		if(!empty($this->users))
		{
			foreach ($this->users as $n => $user)
				$this->userIds[] = $user->id;
		}
		
		parent::afterFind();
	}
}
