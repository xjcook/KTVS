<?php
/* @var $this EventController */
/* @var $model El */

$this->breadcrumbs=array(
	'Els'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List El', 'url'=>array('index')),
	array('label'=>'Manage El', 'url'=>array('admin')),
);
?>

<h1>Create El</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>