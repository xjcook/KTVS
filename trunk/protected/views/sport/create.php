<?php
/* @var $this SportController */
/* @var $model Sport */

$this->breadcrumbs=array(
	'Športy'=>array('index'),
	'Vytvorenie',
);

$this->menu=array(
	array('label'=>'Zoznam športov ', 'url'=>array('index')),
	array('label'=>'Spravovať športy', 'url'=>array('admin')),
);
?>

<h1>Vytvorenie športu</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>