<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Rozvrhy';
$this->breadcrumbs=array(
	'Rozvrhy',
);
?>

<h1>Rozvrhy</h1>

<?php $this->widget('zii.widgets.CMenu', array(
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
)); ?>
