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

        // Leagues
        $model = El::model()->findAllByAttributes(array('type'=>1));
        $leagues = array();
        foreach ($model as $league)
        {
            $leagues[] = array(
                'label'=>'<b>'.$league->name.'</b>',
                'url'=>array('league/view', 'id'=>$league->id),
            );
        }
    	
    	// Events
    	$model = El::model()->findAllByAttributes(array('type'=>0));
    	$events = array();
    	foreach ($model as $event)
    	{
    		$events[] = array(
    			'label'=>'<b>'.$event->name.'</b>',
    			'url'=>array('event/view', 'id'=>$event->id),
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
        	array('label'=>'Prihlasovanie', 'url'=>array('/student/create')),
        	array('label'=>'Ligy', 'url'=>array('/league/index'), 'items'=>$leagues),
        	array('label'=>'Akcie', 'url'=>array('/event/index'), 'items'=>$events),
        	array('label'=>'Kurzy', 'url'=>array('/course/index'), 'items'=>$courses),
        	array('label'=>'Galéria', 'url'=>array('/gallery/index')),

        );
        $this->submenuHtmlOptions= array('class' => 'submenu');

        parent::init();
    }
}
