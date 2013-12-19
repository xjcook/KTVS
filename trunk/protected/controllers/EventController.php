<?php

class EventController extends Controller
{
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		if(Yii::app()->user->checkAccess('createEvent'))
		{
			$model=new El;
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['El']))
			{
				$model->attributes=$_POST['El'];
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

		if(Yii::app()->user->checkAccess('updateOwnEvent', array('event'=>$model)) ||
		   Yii::app()->user->checkAccess('updateEvent'))
		{
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['El']))
			{
				$model->attributes=$_POST['El'];
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
		$model=$this->loadModel($id);
		
		if(Yii::app()->user->checkAccess('deleteOwnEvent', array('event'=>$model)) ||
		   Yii::app()->user->checkAccess('deleteEvent'))
		{
			$model->delete();

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
		$dataProvider=new CActiveDataProvider('El');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		if(Yii::app()->user->checkAccess('updateEvent'))
		{	
			$model=new El('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['El']))
				$model->attributes=$_GET['El'];
	
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
	 * Create subpage
	 * @param id Id of the Event
	 */
	public function actionCreatePage() 
	{
		$pageModel = new Page;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
			
		if(isset($_POST['Page']))
		{
			$pageModel->attributes=$_POST['Page'];
		
			if ($pageModel->validate())
			{
				$pageModel->save();
				$elModel=El::model()->findByPk($_POST['Page']['event_id']);
				$elModel->pages=array_merge($elModel->pages, array($pageModel->id));
				$elModel->save();
				$this->redirect(array('view','id'=>$elModel->id));
			}
		}
			
		$this->render('createPage',array(
			'pageModel'=>$pageModel,
		));
		
		/*if(Yii::app()->user->checkAccess('updateOwnEvent', array('event'=>$eventModel)) ||
		   Yii::app()->user->checkAccess('updateEvent'))
		{
			
			
			
		}
		else
		{
			Yii::app()->user->loginRequired();
		}*/
	}
	
	/**
	 * Update subpage
	 * @param id Id of the Event
	 */
	public function actionUpdatePage($id) 
	{
		$pageModel = Page::model()->findByPk($id);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
			
		if(isset($_POST['Page']))
		{
			$pageModel->attributes=$_POST['Page'];
		
			if ($pageModel->validate())
			{
				$pageModel->save();
				$elModel=El::model()->findByPk($_POST['Page']['event_id']);
				$elModel->pages=array_merge($elModel->pages, array($pageModel->id));
				$elModel->save();
				$this->redirect(array('view','id'=>$elModel->id));
			}
		}
			
		$this->render('createPage',array(
			'pageModel'=>$pageModel,
		));
	}
	
	/**
	 * Delete subpage
	 * @param id Id of the Event
	 */
	public function actionDeletePage($id)
	{
		$model=Page::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return El the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=El::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param El $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='el-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
