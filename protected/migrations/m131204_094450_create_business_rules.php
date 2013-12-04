<?php

class m131204_094450_create_business_rules extends CDbMigration
{
	public function up()
	{
		$auth=Yii::app()->authManager;
		
		// Course
		$auth->createOperation('createCourse', 'create a course');
		$auth->createOperation('readCourse', 'read a course');
		$auth->createOperation('updateCourse', 'update a course');
		$auth->createOperation('deleteCourse', 'delete a course');
		
		// Event
		$auth->createOperation('createEvent', 'create a event');
		$auth->createOperation('readEvent', 'read a event');
		$auth->createOperation('updateEvent', 'update a event');
		$auth->createOperation('deleteEvent', 'delete a event');
		
		$bizRule='return Yii::app()->user->id==$params["event"]->user_id;';
		$task=$auth->createTask('updateOwnEvent','update a event by author himself',$bizRule);
		$task->addChild('updateEvent');
		$task=$auth->createTask('deleteOwnEvent','delete a event by author himself',$bizRule);
		$task->addChild('deleteEvent');
		
		// League
		$auth->createOperation('createLeague', 'create a league');
		$auth->createOperation('readLeague', 'read a league');
		$auth->createOperation('updateLeague', 'update a league');
		$auth->createOperation('deleteLeague', 'delete a league');
		
		$bizRule='return Yii::app()->user->id==$params["league"]->user_id;';
		$task=$auth->createTask('updateOwnLeague','update a league by author himself',$bizRule);
		$task->addChild('updateLeague');
		
		// News
		$auth->createOperation('createNews', 'create a news');
		$auth->createOperation('readNews', 'read a news');
		$auth->createOperation('updateNews', 'update a news');
		$auth->createOperation('deleteNews', 'delete a news');
		
		$bizRule='return Yii::app()->user->id==$params["news"]->user_id;';
		$task=$auth->createTask('updateOwnNews','update a news by author himself',$bizRule);
		$task->addChild('updateNews');
		$task=$auth->createTask('deleteOwnNews','delete a news by author himself',$bizRule);
		$task->addChild('deleteNews');
		
		// Page
		$auth->createOperation('createPage', 'create a page');
		$auth->createOperation('readPage', 'read a page');
		$auth->createOperation('updatePage', 'update a page');
		$auth->createOperation('deletePage', 'delete a page');
		
		$bizRule='return Yii::app()->user->id==$params["page"]->user_id;';
		$task=$auth->createTask('updateOwnPage','update a page by author himself',$bizRule);
		$task->addChild('updatePage');
		$task=$auth->createTask('deleteOwnPage','delete a page by author himself',$bizRule);
		$task->addChild('deletePage');
		
		// Schedule
		$auth->createOperation('createSchedule', 'create a schedule');
		$auth->createOperation('readSchedule', 'read a schedule');
		$auth->createOperation('updateSchedule', 'update a schedule');
		$auth->createOperation('deleteSchedule', 'delete a schedule');
		
		// Sport
		$auth->createOperation('createSport', 'create a sport');
		$auth->createOperation('readSport', 'read a sport');
		$auth->createOperation('updateSport', 'update a sport');
		$auth->createOperation('deleteSport', 'delete a sport');
		
		// Student
		$auth->createOperation('createStudent', 'create a student');
		$auth->createOperation('readStudent', 'read a student');
		$auth->createOperation('updateStudent', 'update a student');
		$auth->createOperation('deleteStudent', 'delete a student');
		
		// Tvobject
		$auth->createOperation('createTvobject', 'create a tvobject');
		$auth->createOperation('readTvobject', 'read a tvobject');
		$auth->createOperation('updateTvobject', 'update a tvobject');
		$auth->createOperation('deleteTvobject', 'delete a tvobject');
		
		// User
		$auth->createOperation('createUser', 'create a user');
		$auth->createOperation('readUser', 'read a user');
		$auth->createOperation('updateUser', 'update a user');
		$auth->createOperation('deleteUser', 'delete a user');
		
		$bizRule='return Yii::app()->user->id==$params["user"]->id;';
		$task=$auth->createTask('readOwnUser','read a user by himself',$bizRule);
		$task->addChild('readUser');
		$task=$auth->createTask('updateOwnUser','update a user by himself',$bizRule);
		$task->addChild('updateUser');
		
		// Roles
		$role=$auth->createRole('student', 'student user');
		$role->addChild('readCourse');
		$role->addChild('readEvent');
		$role->addChild('readLeague');
		$role->addChild('readNews');
		$role->addChild('readPage');
		$role->addChild('readSchedule');
		$role->addChild('readSport');
		$role->addChild('readTvobject');
		$role->addChild('createStudent');
		
		$bizRule='return !Yii::app()->user->isGuest;';
		$role=$auth->createRole('teacher', 'teacher user', $bizRule);
		$role->addChild('student');
		$role->addChild('readOwnUser');
		$role->addChild('createEvent');
		$role->addChild('createNews');
		$role->addChild('createPage');
		$role->addChild('updateOwnEvent');
		$role->addChild('updateOwnLeague');
		$role->addChild('updateOwnNews');
		$role->addChild('updateOwnPage');
		$role->addChild('updateOwnUser');
		$role->addChild('deleteOwnEvent');
		$role->addChild('deleteOwnNews');
		$role->addChild('deleteOwnPage');
		
		$bizRule='return Yii::app()->user->isAdmin();';
		$role=$auth->createRole('admin', 'admin user', $bizRule);
		$role->addChild('teacher');
		$role->addChild('readUser');
		$role->addChild('readStudent');
		$role->addChild('createCourse');
		$role->addChild('createLeague');
		$role->addChild('createSchedule');
		$role->addChild('createSport');
		$role->addChild('createTvobject');
		$role->addChild('createUser');
		$role->addChild('updateCourse');
		$role->addChild('updateEvent');
		$role->addChild('updateLeague');
		$role->addChild('updateNews');
		$role->addChild('updatePage');
		$role->addChild('updateSchedule');
		$role->addChild('updateSport');
		$role->addChild('updateStudent');
		$role->addChild('updateTvobject');
		$role->addChild('updateUser');
		$role->addChild('deleteCourse');
		$role->addChild('deleteEvent');
		$role->addChild('deleteLeague');
		$role->addChild('deleteNews');
		$role->addChild('deletePage');
		$role->addChild('deleteSchedule');
		$role->addChild('deleteSport');
		$role->addChild('deleteStudent');
		$role->addChild('deleteTvobject');
		$role->addChild('deleteUser');
	}

	public function down()
	{
		$this->delete('tbl_auth_assignment');
		$this->delete('tbl_auth_item_child');
		$this->delete('tbl_auth_item');
	}
}
