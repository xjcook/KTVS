<?php
/* @var $this TvobjectController */
/* @var $model Tvobject */

$this->breadcrumbs=array(
	'Tvobjects'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Tvobject', 'url'=>array('index')),
	array('label'=>'Create Tvobject', 'url'=>array('create')),
	array('label'=>'Update Tvobject', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tvobject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tvobject', 'url'=>array('admin')),
);
?>

<h1>View Tvobject #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sport_id',
		'name',
		'description',
		'image',
		'map',
		'updated_at',
	),
)); ?>
