<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Prihlásenie na';
$this->breadcrumbs=array(
	'Prihlásenie na',
);
?>

<h1>Prihlásenie na</h1>

<?php $this->widget('zii.widgets.CMenu', array(
	'items'=>array(
		array(
        	'label'=>'Šport',
            'url'=>array('/sign/sport'),
        ),
        array(
        	'label'=>'Ligu',
        	'url'=>array('/sign/league'),
        ),
        array(
        	'label'=>'Akciu',
        	'url'=>array('/sign/event'),
        ),
        array(
        	'label'=>'Kurz',
        	'url'=>array('/sign/course'),
        ),
	),
)); ?>
