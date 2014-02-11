<?php

class StudentController extends Controller
{	
	/**
	* @var string set pageTitle
	*/
	public $pageTitle='Prihlasovanie';

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
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id=null,$email=null,$hash=null)
	{
		if ($id!==null)
		{
			$model=$this->loadModel($id);
		}
		else
		{
			$model=$this->loadModelByHash($email,$hash);
		}
		
		$this->render('view',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Student;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Student']))
		{
			$model->attributes=$_POST['Student'];
			
			if($model->validate())
			{
				$hash=sha1(mt_rand(10000, 99999).time().$model->email);
				$model->hash=$hash;
				$model->save(false);
				
				// TODO send email with hash
				$to      = $model->email;
				$subject = 'KTVS Prihlasenie studenta';
				$message = 'Uspesne ste sa prihlasili.\nLink na odhlasenie: '
						.Yii::app()->createAbsoluteUrl('student/delete', array(
							'email'=>$model->email,
							'hash'=>$hash,
				));
				$headers = 'From: dreamteam@pobox.sk' . "\r\n" .
						'Reply-To: dreamteam@pobox.sk' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
				
				mail($to, $subject, $message, $headers);
					
				/*$this->redirect(Yii::app()->createUrl('student/view', array(
					'email'=>$model->email,
					'hash'=>$hash,
				)));*/
				
				Yii::app()->user->setFlash('success', 'Úspešne ste prihlásený!');
				$this->redirect(Yii::app()->request->baseUrl);
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		if(Yii::app()->user->checkAccess('updateStudent'))
		{
			$model=$this->loadModel($id);
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['Student']))
			{
				$model->attributes=$_POST['Student'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}
	
			$this->render('update',array(
				'model'=>$model,
			));
		}
		else
		{
			Yii::app()->user->setFlash('error', 'Nemáte dostatočné práva!');
			Yii::app()->user->loginRequired();
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id=null,$email=null,$hash=null)
	{
		if($id!==null)
		{
			if(Yii::app()->user->checkAccess('deleteStudent'))
			{
				$this->loadModel($id)->delete();
		
				// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
				if(!isset($_GET['ajax']))
					$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
			else
			{
				Yii::app()->user->setFlash('error', 'Nemáte dostatočné práva!');
				Yii::app()->user->loginRequired();
			}
		}
		else
		{
			$this->loadModelByHash($email,$hash)->delete();
			Yii::app()->user->setFlash('success', 'Úspešne ste odhlásený!');
			$this->redirect(Yii::app()->request->baseUrl);			
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		if(Yii::app()->user->checkAccess('readStudent'))
		{
			$dataProvider=new CActiveDataProvider('Student', array(
				'criteria'=>array(
					'with'=>array('sport'=>array(
						'together'=>'true',
						'joinType'=>'INNER JOIN',
					)),
				),
			));
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
			));
		}
		else
		{
			Yii::app()->user->setFlash('error', 'Nemáte dostatočné práva!');
			Yii::app()->user->loginRequired();
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		if(Yii::app()->user->checkAccess('updateStudent'))
		{
			$model=new Student('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['Student']))
				$model->attributes=$_GET['Student'];
	
			$this->render('admin',array(
				'model'=>$model,
			));
		}
		else
		{
			Yii::app()->user->setFlash('error', 'Nemáte dostatočné práva!');
			Yii::app()->user->loginRequired();
		}
	}
	
	/**
	 * Perform AJAX to populate Leagues, Events and Courses dropDownList
	 */
	public function actionDynamicPages()
	{
		$data=El::model()->findByPk($_POST['el_id'])
			->getRelated('pages',true);
		$data=CHtml::listData($data,'id','title');
		
		foreach($data as $value=>$name)
		{
			echo CHtml::tag('option',
					array('value'=>$value),CHtml::encode($name),true);
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Student the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Student::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'Požadovaná stránka nebola nájdená.');
		return $model;
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Student the loaded model
	 * @throws CHttpException
	 */
	public function loadModelByHash($email,$hash)
	{
		$model=Student::model()->findByAttributes(array('email'=>$email));
		if($model===null)
			throw new CHttpException(404,'Požadovaná stránka nebola nájdená.');
		else if($hash != $model->hash)
			throw new CHttpException(401,'Nemáte dostatočné práva.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Student $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='student-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
		
}
