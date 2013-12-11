<?php

class CourseTest extends CDbTestCase 
{
	public $fixtures=array(
		'courses'=>'Course',
		'users'=>'User',
	);
	
	public function testCreate()
	{
		// get fixtures
		//$users=$this->users;
		
		// insert a new course
		$course=new Course;
		$course->setAttributes(array(
			'name'=>'Snow',
			'description'=>'Snow course',
			'type'=>0,
			//'users'=>$users,
		),false);
		$this->assertTrue($course->save(false));
		
		// verify
		$course=Course::model()->findByPk($course->id);
		$this->assertTrue($course instanceof Course);
		// TODO
	}
}
