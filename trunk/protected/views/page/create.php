<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Stránky'=>array('index'),
	'Vytvorenie',
);

$this->menu=array(
	array('label'=>'Zoznam stránok', 'url'=>array('index')),
	array('label'=>'Spravovať stránky', 'url'=>array('admin')),
);
?>

<h1>Vytvorenie stránky </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>