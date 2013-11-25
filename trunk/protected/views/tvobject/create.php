<?php
/* @var $this TvobjectController */
/* @var $model Tvobject */

$this->breadcrumbs=array(
	'Tvobjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tvobject', 'url'=>array('index')),
	array('label'=>'Manage Tvobject', 'url'=>array('admin')),
);
?>

<h1>Create Tvobject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>