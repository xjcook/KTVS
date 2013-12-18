<?php 

class PageWidget extends CWidget
{
 	public $model;
 	
 	public $form;
	
    public function run()
    {
    	$this->render('pageWidget', array('model'=>$this->model,'form'=>$this->form));
    }
}
