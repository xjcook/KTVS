<?php
 
class WebUser extends CWebUser {
 
  // Store model to not repeat query.
  private $_model;
 
  // This is a function that checks the field 'role'
  // in the User model to be equal to 1, that means it's admin
  // access it by Yii::app()->user->isAdmin()
  function isAdmin(){
    $user = $this->loadUser(Yii::app()->user->id);
    return intval($user->is_admin) == 1;
  }
  
  function checkUserAccess($model) {
  	return $model->with(array(
  		'users'=>array(
  			'select'=>'users.id',
  			'condition'=>'users.id=:id',
  			'params'=>array(':id'=>Yii::app()->user->id),
  		),
  	))->exists();
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
