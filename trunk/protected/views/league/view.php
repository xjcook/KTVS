<?php
/* @var $this LeagueController */
/* @var $model El */

$this->breadcrumbs=array(
	'Els'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List El', 'url'=>array('index')),
	array('label'=>'Create El', 'url'=>array('create')),
	array('label'=>'Update El', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete El', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage El', 'url'=>array('admin')),
);
?>

<h1>View El #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'name',
		'description',
		'type',
		'updated_at',
	),
)); ?>
