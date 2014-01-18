<?php
 
class WebUser extends CWebUser {
 
  // Store model to not repeat query.
  private $_model;
 
  /**
   * Check if user is Admin
   * field 'is_admin' must to be equal to 1, that means it's admin
   * @return True if admin access
   */
  function isAdmin()
  {
    $user = $this->loadUser(Yii::app()->user->id);
    if ($user===null)
        return 0;
    else
        return intval($user->is_admin) == 1;
  }
  
  /**
   * Check if user has access
   * @param CActiveRecord model with users relation
   * @return True if granted access
   */
  function checkUserAccess($model) 
  {
	$userId = Yii::app()->user->id;
	if ($userId===null)
		return 0;
	else
		return $model->with(array(
			'users'=>array(
				'select'=>'users.id',
				'condition'=>'users.id=:id',
				'params'=>array(':id'=>$userId),
			),
		))->exists();
  }
  
  /**
   * Return events main categories
   * if user is admin then return all else return only events which belongs to user
   */
  function getEventsListData()
  {
  	$events = array();
  	
	if($this->isAdmin())
	{
  		$events = CHtml::listData(El::model()->findAllByAttributes(array('type'=>0)),'id','name');
	}
	else
	{	
		$events = CHtml::listData(User::model()->findByPk(Yii::app()->user->id)
										->getRelated('els',true),'id','name')
										->findByAttributes(array('type'=>0));
	}
  	
	return $events;
  }
  
  /**
   * Return leagues main categories
   * if user is admin then return all else return only events which belongs to user
   */
  function getLeaguesListData()
  {
  	$leagues = array();
  	 
  	if($this->isAdmin())
  	{
  		$leagues = CHtml::listData(El::model()->findAllByAttributes(array('type'=>1)),'id','name');
  	}
  	else
  	{
		$leagues = CHtml::listData(User::model()->findByPk(Yii::app()->user->id)
										->getRelated('els',true),'id','name')
										->findByAttributes(array('type'=>1));
  	}
  	 
  	return $leagues;
  }
  
  function getViewUrl($model, $dataId)
  {
  	$url = Yii::app()->createUrl('/', array(
					$model=>Yii::app()->getRequest()->getParam('id'), 
  					'page'=>$dataId
  	));
  	return $url;
  }
  
  function getUpdateUrl($model, $dataId)
  {
  	$url = Yii::app()->createUrl($model, array(
  		'update'=>Yii::app()->getRequest()->getParam('id'),
  		'page'=>$dataId
  	));
  	return $url;
  }
  
  // Load user model.
  protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null)
                $this->_model=User::model()->findByPk($id);
        }
        return $this->_model;
    }
}
