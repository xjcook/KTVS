<?php
/* @var $this TvobjectController */
/* @var $model Tvobject */

$this->breadcrumbs=array(
	'Objekty'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Zoznam objektov', 'url'=>array('index')),
	array('label'=>'Vytvoriť objekt', 'url'=>array('create')),
	array('label'=>'Upraviž objekt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť objekt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať objekt', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->name; ?></h1>

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
