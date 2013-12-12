<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Používatelia'=>array('index'),
	'Vytvorenie',
);

$this->menu=array(
	array('label'=>'Zoznam používateľov', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Vytvor používateľa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>