<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Učitelia'=>array('index'),
	'Vytvorenie učiteľa',
);

$this->menu=array(
	array('label'=>'Zoznam učiteľov', 'url'=>array('index')),
	array('label'=>'Spravovať učiteľov', 'url'=>array('admin')),
);
?>

<h1>Vytvorenie učiteľa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>