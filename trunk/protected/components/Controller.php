<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	/**
	 * @var object model of LoginForm
	 */
	public $loginForm;
	
	/**
	 * Overrides beforeAction() to set loginForm on every page
	 * @see CController::beforeAction()
	 */
	protected function beforeAction($action) {
		$this->loginForm=new LoginForm;
	
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$this->loginForm->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($this->loginForm->validate() && $this->loginForm->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
	
		return parent::beforeAction($action);
	}
	
	/**
	 * Check if user has admin rights
	 */
	public function isAdmin() {
		$user=User::model()->findbyPk(Yii::app()->user->id);
		
		if (isset($user) && $user->is_admin == 1) 
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}
}