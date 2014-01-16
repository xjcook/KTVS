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

        // Leagues
        $model = El::model()->findAllByAttributes(array('type'=>1));
        $leagues = array();
        foreach ($model as $league)
        {
            $leagues[] = array(
                'label'=>$league->name,
                'url'=>array('league/view', 'id'=>$league->id),
            	'linkOptions'=>array('class'=>'mainCategory'),
            );
        }
    	
    	// Events
    	$model = El::model()->findAllByAttributes(array('type'=>0));
    	$events = array();
    	foreach ($model as $event)
    	{
    		$events[] = array(
    			'label'=>$event->name,
    			'url'=>array('event/view', 'id'=>$event->id),
    			'linkOptions'=>array('class'=>'mainCategory'),
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
    			'linkOptions'=>array('class'=>'mainCategory'),
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
            array(
                'label'=>'Rozvrh',
                'url'=>array('/schedule/index'),
                'items'=>array(
                    array(
                        'label'=>'1.ročník',
                        'url'=>'#',
                    ),
                    array(
                        'label'=>'2.ročník',
                        'url'=>'#',
                    ),
                    array(
                        'label'=>'3.ročník',
                        'url'=>'#',
                    ),
                    array(
                        'label'=>'4.ročník',
                        'url'=>'#',
                    ),
                    array(
                        'label'=>'5.ročník',
                        'url'=>'#',
                    ),
                ),
            ),
        	array('label'=>'Novinky', 'url'=>array('/news/index'), 'items'=>$newses),
        	array('label'=>'Prihlasovanie', 'url'=>array('/student/create')),
        	array('label'=>'Ligy', 'url'=>array('/league/index'), 'items'=>$leagues, 'itemOptions'=>array('class'=>'item')),
        	array('label'=>'Akcie', 'url'=>array('/event/index'), 'items'=>$events, 'itemOptions'=>array('class'=>'item')),
        	array('label'=>'Kurzy', 'url'=>array('/course/index'), 'items'=>$courses, 'itemOptions'=>array('class'=>'item')),
        	array('label'=>'Galéria', 'url'=>'#'),

        );

        $this->id = 'mainMenu';
        $this->submenuHtmlOptions = array('class' => 'submenu');

        parent::init();
    }
}
