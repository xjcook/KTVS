<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Kurzy'=>array('index'),
	'Vytvorenie',
);

$this->menu=array(
	array('label'=>'Zoznam kurzov', 'url'=>array('index')),
	array('label'=>'Spravovať kurzy', 'url'=>array('admin')),
);
?>

<h1>Vytvorenie kurzu</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>