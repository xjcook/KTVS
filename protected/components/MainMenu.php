<?php

Yii::import('zii.widgets.CMenu');

class MainMenu extends CMenu
{
    public function init()
    {
    	// Schedules
    	$model = Schedule::model()->findAll();
    	foreach ($model as $schedule)
    	{
    		$schedules[] = array(
    			'label'=>$schedule->page->title,
    			'url'=>Yii::app()->createUrl('schedule/'.$schedule->id),
    		);
    	}
    	
    	// Courses
    	$model = Course::model()->findAll();
    	foreach ($model as $course)
    	{
    		$courses[] = array(
    			'label'=>$course->name, 
    			'url'=>Yii::app()->createUrl('course/'.$course->id),
    		);
    	}
        
        $this->items=array(
        	array(
        		'label'=>'O Nás',
        		'url'=>array('/site/index'),
        		'items'=>array(
        			array(
        				'label'=>'Učitelia',
        				'url'=>'#',
        			),
        			array(
        				'label'=>'Konzultačné hodiny',
        				'url'=>'#',
        			),
        			array(
        				'label'=>'Športoviská',
        				'url'=>'#',
        			),
        		),
        	),
        	array('label'=>'Novinky', 'url'=>array('/news/index')),
        	array('label'=>'Rozvrh', 'url'=>array('/schedule/index'), 'items'=>$schedules),
        	array('label'=>'Prihlasovanie', 'url'=>'#'),
        	array('label'=>'Ligy', 'url'=>array('/league/index')),
        	array('label'=>'Akcie', 'url'=>array('/event/index')),
        	array('label'=>'Kurzy', 'url'=>array('/course/index'), 'items'=>$courses),
        	array('label'=>'Galéria', 'url'=>array('/gallery/index')),
        );

        parent::init();
    }
}
