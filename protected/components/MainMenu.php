<?php

Yii::import('zii.widgets.CMenu');

class MainMenu extends CMenu
{
    public function init()
    {
    	// News
    	$model = News::model()->findAll(array(
    		'order'=>'id DESC',
    		'limit'=>10,
    	));
    	$newses = array();
    	foreach ($model as $news)
    	{
    		$newses[] = array(
    			'label'=>$news->title,
    			'url'=>array('news/view', 'id'=>$news->id),
    		);
    	}
    	
    	// Schedules
    	$model = Schedule::model()->findAll();
    	$schedules = array();
    	foreach ($model as $schedule)
    	{
    		$schedules[] = array(
    			'label'=>$schedule->page->title,
    			'url'=>array('schedule/view', 'id'=>$schedule->id),
    		);
    	}
    	
    	// Courses
    	$model = Course::model()->findAll();
    	$courses = array();
    	foreach ($model as $course)
    	{
    		$courses[] = array(
    			'label'=>$course->name, 
    			'url'=>array('course/view', 'id'=>$course->id),
    		);
    	}
        
        $this->items=array(
        	array(
        		'label'=>'O Nás',
        		'url'=>array('/site/index'),
        		'items'=>array(
        			array(
        				'label'=>'Učitelia',
        				'url'=>array('user/index'),
        			),
        			array(
        				'label'=>'Konzultačné hodiny',
        				'url'=>'#',
        			),
        			array(
        				'label'=>'Športoviská',
        				'url'=>array('tvobject/index'),
        			),
        		),
        	),
        	array('label'=>'Novinky', 'url'=>array('/news/index'), 'items'=>$newses),
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
