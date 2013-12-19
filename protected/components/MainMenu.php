<?php

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
        		/*'linkOptions'=> array(
        		 'class' => 'dropdown-toggle',
        			'data-toggle' => 'dropdown',
        		),*/
        		/*'itemOptions' => array('
        		 class'=>'dropdown user',
        		),*/
        		'items'=>array(
        			array(
        				'label'=>'Submenu1',
        				'url'=>'#',
        			),
        			array(
        				'label'=>'Submenu2',
        				'url'=>'#',
        			),
        			/*array(
        			 'label' => '',
        				array(
        					'class' => 'divider',
        				)
        			),*/
        			/*array(
        			 'label'=>'<i>nieco</i>',
        				'url'=>'#',
        			),*/
        			array(
        				'label'=>'Submenu3',
        				'url'=>'#',
        			),
        		),
        	),
        	array('label'=>'Novinky', 'url'=>array('/news/index')),
        	array('label'=>'Rozvrh', 'url'=>array('/schedule/index'), 'items'=>$schedules),
        	array('label'=>'Ligy', 'url'=>array('/league/index')),
        	array('label'=>'Akcie', 'url'=>array('/event/index')),
        	array('label'=>'Kurzy', 'url'=>array('/course/index'), 'items'=>$courses),
        	array('label'=>'Galéria', 'url'=>array('/gallery/index')),
        );
        
        //'encodeLabel'=>false,
        //'activeCssClass'=>'active',
        /*'htmlOptions'=>array(
         'id'=>'yw4',
        	'class'=>'blbost',
        ),*/
        /*'submenuHtmlOptions'=>array(
         'nieco'=>'hodnota',
        	'id'=>'blbost',
        	'class'=>'class1 class2',
        ),*/

        parent::init();
    }
}
