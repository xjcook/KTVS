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
        	// Add main category
            $leagues[] = array(
                'label'=>$league->name,
                'url'=>array('league/view', 'id'=>$league->id),
            	'linkOptions'=>array('class'=>'mainCategory'),
            );

            // Add separator
            $leagues[] = array(
            	'label'=>'',
            	'itemOptions'=>array('class'=>'divider'),
            );
            
            // Add subcategories
            $modelSubEl = El::model()->findByPk($league->id)->getRelated('pages',true);
            foreach ($modelSubEl as $subEvent)
            {
            	$leagues[] = array(
            		'label'=>$subEvent->title,
            		'url'=>Yii::app()->createUrl('/', array('league'=>$league->id, 'page'=>$subEvent->id)),
            		'linkOptions'=>array('class'=>'subCategory'),
            	);
            }
        }
    	
    	// Events
    	$model = El::model()->findAllByAttributes(array('type'=>0));
    	$events = array();
    	foreach ($model as $event)
    	{
    		// Add main category
    		$events[] = array(
    			'label'=>$event->name,
    			'url'=>array('event/view', 'id'=>$event->id),
    			'linkOptions'=>array('class'=>'mainCategory'),
    		);
    		
    		// Add separator
    		$events[] = array(
    			'label'=>'',
    			'itemOptions'=>array('class'=>'divider'),
    		);
    		
    		// Add subcategories
    		$modelSubEl = El::model()->findByPk($event->id)->getRelated('pages',true);
    		foreach ($modelSubEl as $subEvent)
    		{
    			$events[] = array(
    				'label'=>$subEvent->title,
    				'url'=>Yii::app()->createUrl('/', array('event'=>$event->id, 'page'=>$subEvent->id)),
    				'linkOptions'=>array('class'=>'subCategory'),
    			);
    		}
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
                        'url'=>array('schedule/1'),
                    ),
                    array(
                        'label'=>'2.ročník',
                        'url'=>array('schedule/2'),
                    ),
                    array(
                        'label'=>'3.ročník',
                        'url'=>array('schedule/3'),
                    ),
                    array(
                        'label'=>'4.ročník',
                        'url'=>array('schedule/4'),
                    ),
                    array(
                        'label'=>'5.ročník',
                        'url'=>array('schedule/5'),
                    ),
                ),
            	'active'=>strpos(Yii::app()->request->requestUri,'schedule') !== false,
            ),
        	array(
        		'label'=>'Novinky', 
        		'url'=>array('/news/index'), 
        		'items'=>$newses,
            ),
        	array(
        		'label'=>'Prihlasovanie', 
        		'url'=>array('/sign'),
            ),
        	array(
        		'label'=>'Ligy', 
        		'url'=>array('/league/index'), 
        		'items'=>$leagues, 
        		'itemOptions'=>array('class'=>'item'),
        		'active'=>strpos(Yii::app()->request->requestUri,'league') !== false,
            ),
        	array(
        		'label'=>'Akcie', 
        		'url'=>array('/event/index'), 
        		'items'=>$events, 
        		'itemOptions'=>array('class'=>'item'),
        		'active'=>strpos(Yii::app()->request->requestUri,'event') !== false,
        	),
        	array('label'=>'Kurzy', 
        		'url'=>array('/course/index'), 
        		'items'=>$courses, 
        		'itemOptions'=>array('class'=>'item'),
        		'active'=>strpos(Yii::app()->request->requestUri,'course') !== false,
        	),
        	array(
        		'label'=>'Galéria', 
        		'url'=>'#',
            ),
        );

        $this->id = 'mainMenu';
        $this->activateParents = true;
        $this->submenuHtmlOptions = array('class' => 'submenu');

        parent::init();
    }
}
