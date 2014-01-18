<?php

/**
 * This is the model class for table "tbl_student".
 *
 * The followings are the available columns in table 'tbl_student':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $class
 * @property string $phone
 * @property string $skills
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Course[] $courses
 * @property El[] $els
 * @property Sport $sport_id
 * @property Tvobject[] $tvobjects
 */
class Student extends CActiveRecord
{
	/**
	 * @property sportIds
	 */
	public $sportIds = array();
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, class, phone', 'required'),
			array('class', 'numerical', 'integerOnly'=>true),
			array('name, email, phone, skills', 'length', 'max'=>255),
			array('sport_id, hashed_password', 'safe'),
// 			array('sports', 'checkCapacity'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, class, phone, skills, updated_at', 'safe', 'on'=>'search'),
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
			'courses' => array(self::MANY_MANY, 'Course', 'tbl_student_course(student_id, course_id)'),
			'els' => array(self::MANY_MANY, 'El', 'tbl_student_el(student_id, el_id)'),
			'sport' => array(self::BELONGS_TO, 'Sport', 'sport_id'),
			'tvobjects' => array(self::MANY_MANY, 'Tvobject', 'tbl_sport_tvobject(sport_id, tvobject_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sport_id' => 'Šport',
			'sport.name' => 'Šport',
			'name' => 'Meno',
			'email' => 'Email',
			'class' => 'Ročník',
			'phone' => 'Mobil',
			'skills' => 'Skúsenosti',
			'updated_at' => 'upravene dna',
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
		$criteria->compare('class',$this->class);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('skills',$this->skills,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Student the static model class
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
		// set sportIds[]
		if(!empty($this->sports))
		{
			foreach ($this->sports as $n=>$sport)
				$this->sportIds[] = $sport->id;
		}
	
		parent::afterFind();
	}
	
	public function checkCapacity($attribute)
	{
		if (!empty($this->sports))
		{
			foreach ($this->getRelated('sports',true) as $sport)
			{
				if(count($sport->getRelated('students',true)) >= $sport->capacity)
				{
					$this->addError($attribute, 'Je naplnená kapacita športu: '.$sport->name);
				}
			}
		}
	}
}
