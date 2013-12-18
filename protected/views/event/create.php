<?php
/* @var $this EventController */
/* @var $model El */

$this->breadcrumbs=array(
	'Akcie'=>array('index'),
	'Vytvorenie',
);

$this->menu=array(
	array('label'=>'Zoznam akcií ', 'url'=>array('index')),
	array('label'=>'Spravovať akcie', 'url'=>array('admin')),
);
?>

<h1>Vytvorenie akcie</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>