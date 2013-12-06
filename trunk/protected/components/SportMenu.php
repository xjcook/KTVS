<?php

class SportMenu extends CMenu
{
    public function init()
    {
        $criteria = new CDbCriteria;
        $criteria->order = '`id` ASC';

        $sports = Sport::model()->findAll($criteria);

        foreach ($sports as $sport)
        {
            $this->items[] = array('label'=>$sport->name, 
            	                   'url'=>Yii::app()->request->baseUrl.'/sport/'.$sport->id);
        }

        parent::init();
    }
}
