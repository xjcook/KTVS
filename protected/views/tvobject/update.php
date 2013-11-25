<?php
/* @var $this TvobjectController */
/* @var $model Tvobject */

$this->breadcrumbs=array(
	'Tvobjects'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tvobject', 'url'=>array('index')),
	array('label'=>'Create Tvobject', 'url'=>array('create')),
	array('label'=>'View Tvobject', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tvobject', 'url'=>array('admin')),
);
?>

<h1>Update Tvobject <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>