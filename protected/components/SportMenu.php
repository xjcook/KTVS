<?php

Yii::import('zii.widgets.CMenu', true);

class SportMenu extends CMenu
{
    public function init()
    {
        // Here we define query conditions.
        $criteria = new CDbCriteria;
        $criteria->order = '`id` ASC';

        $sports = Sport::model()->findAll();

        foreach ($sports as $sport)
            $this->items[] = array('label'=>$sport->name, 'url'=> Yii::app()->request->baseUrl . '/sport/' . $sport->id);

        //$items = array(array('name'=>'aerobik'));
        parent::init();
    }
}