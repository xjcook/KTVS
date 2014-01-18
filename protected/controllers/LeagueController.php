<?php

class LeagueController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	* @var string set pageTitle
	*/
	public $pageTitle='Ligy';
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'postOnly + delete, deleteSubPage', // we only allow deletion via POST request
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$dataProvider=new CActiveDataProvider('Page', array(
			'criteria'=>array(
				'with'=>array('els'=>array(
					'on'=>'els.id=' .$id,
					'together'=>true,
					'joinType'=>'INNER JOIN',
				)),
			),
		));
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		if(Yii::app()->user->checkAccess('createLeague'))
		{	
			$model=new El;
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['El']))
			{
				$model->attributes=$_POST['El'];
				$model->users=$model->userIds;
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

		if(Yii::app()->user->checkAccess('updateOwnLeague', array('league'=>$model)) ||
		   Yii::app()->user->checkAccess('updateLeague'))
		{
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['El']))
			{
				$model->attributes=$_POST['El'];
				$model->users=$model->userIds;
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
		if(Yii::app()->user->checkAccess('deleteLeague'))
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
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionViewSubPage($id,$id2)
	{
		$this->render('viewSubPage',array(
			'model'=>Page::model()->findByPk($id2),
		));
	}
	
	/**
	 * Create subpage
	 * @param id Id of the League
	 */
	public function actionCreateSubPage()
	{
		if(!Yii::app()->user->isGuest) {
			$pageElModel = new PageEl;
			$pageModel = new Page;
				
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['PageEl'], $_POST['Page']))
			{
				$pageElModel->attributes=$_POST['PageEl'];
				$pageModel->attributes=$_POST['Page'];
	
				$valid=$pageElModel->validate();
				$valid=$pageModel->validate() && $valid;
					
				if($valid)
				{
					if(Yii::app()->user->checkAccess('updateOwnLeague',
							array('league'=>El::model()->findByPk($pageElModel->el_id))) ||
							Yii::app()->user->checkAccess('updateLeague'))
					{
						$pageModel->save(false);
						$pageElModel->page_id=$pageModel->id;
	
						$pageElModel->save(false);
						$this->redirect(Yii::app()->user->getCreateUrl('league', 
							$pageElModel->el_id,$pageModel->id));
					}
					else
					{
						throw new CHttpException(401, 'Nemáte dostatočné práva');
					}
				}
			}
	
			$this->render('createSubPage',array(
				'pageElModel'=>$pageElModel,
				'pageModel'=>$pageModel,
			));
		} else {
			Yii::app()->user->loginRequired();
		}
	}
	
	/**
	 * Update subpage
	 * @param id Id of the League
	 */
	public function actionUpdateSubPage($id, $id2)
	{
		$model=$this->loadModel($id);
	
		if(Yii::app()->user->checkAccess('updateOwnLeague', array('league'=>$model)) ||
		Yii::app()->user->checkAccess('updateLeague'))
		{
			$pageElModel = $this->loadPageElModel($id, $id2);
			$pageModel = $this->loadPageModel($id2);
				
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['PageEl'], $_POST['Page']))
			{
				$pageElModel->attributes=$_POST['PageEl'];
				$pageModel->attributes=$_POST['Page'];
	
				$valid=$pageElModel->validate();
				$valid=$pageModel->validate() && $valid;
					
				if($valid)
				{
					$pageModel->save(false);
					$pageElModel->page_id=$pageModel->id;
						
					$pageElModel->save(false);
					$this->redirect(Yii::app()->user->getCreateUrl('league', 
							$pageElModel->el_id,$pageModel->id));
				}
			}
	
			$this->render('updateSubPage',array(
				'pageElModel'=>$pageElModel,
				'pageModel'=>$pageModel,
			));
		} else {
			Yii::app()->user->loginRequired();
		}
	}
	
	/**
	 * Delete subpage
	 * @param id Id of the League
	 */
	public function actionDeleteSubPage($id, $id2)
	{
		$model=$this->loadModel($id);
	
		if(Yii::app()->user->checkAccess('deleteLeague'))
		{
			PageEl::model()->findByAttributes(array('el_id'=>$id,'page_id'=>$id2))->delete();
			Page::model()->findByPk($id2)->delete();
	
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
		$dataProvider=new CActiveDataProvider('El', array(
			'criteria' => array('condition' => 'type=1'),
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		if(Yii::app()->user->checkAccess('updateLeague'))
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
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return El the loaded model
	 * @throws CHttpException
	 */
	public function loadPageElModel($eventId,$pageId)
	{
		$model=PageEl::model()->findByAttributes(array('el_id'=>$eventId,'page_id'=>$pageId));
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
	public function loadPageModel($id)
	{
		$model=Page::model()->findByPk($id);
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
