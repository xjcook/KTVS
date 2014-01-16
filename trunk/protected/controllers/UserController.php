<?php

class UserController extends Controller
{
	/**
	* @var string set pageTitle
	*/
	public $pageTitle='Používatelia';

	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model=$this->loadModel($id);
		
		if(Yii::app()->user->checkAccess('readOwnUser', array('user'=>$model)) ||
		   Yii::app()->user->checkAccess('readUser'))
		{
			$this->render('view',array(
				'model'=>$model,
			));
		}
		else
		{
			Yii::app()->user->loginRequired();
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		if(Yii::app()->user->checkAccess('createUser'))
		{
			$model=new User;
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['User']))
			{
				$model->attributes=$_POST['User'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}
	
			$this->render('create',array(
				'model'=>$model,
			));
		}
		else
		{
			Yii::app()->user->loginRequired();
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		
		if(Yii::app()->user->checkAccess('updateOwnUser', array('user'=>$model)) ||
		   Yii::app()->user->checkAccess('updateUser'))
		{
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['User']))
			{
				$model->attributes=$_POST['User'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}
	
			$this->render('update',array(
				'model'=>$model,
			));
		} 
		else 
		{
			Yii::app()->user->loginRequired();
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->user->checkAccess('deleteUser'))
		{
			$this->loadModel($id)->delete();
	
			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		} 
		else 
		{
			Yii::app()->user->loginRequired();
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		if(Yii::app()->user->checkAccess('readUser'))
		{
			$dataProvider=new CActiveDataProvider('User');
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
			));
		}
		else
		{
			Yii::app()->user->loginRequired();
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		if(Yii::app()->user->checkAccess('updateUser'))
		{
			$model=new User('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['User']))
				$model->attributes=$_GET['User'];
	
			$this->render('admin',array(
				'model'=>$model,
			));
		}
		else
		{
			Yii::app()->user->loginRequired();
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
