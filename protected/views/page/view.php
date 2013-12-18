<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Stránky'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Zoznam stránok', 'url'=>array('index')),
	array('label'=>'Vytvoriť stránky', 'url'=>array('create')),
	array('label'=>'Upraviť stránku', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť stránku', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať stránky', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'title',
		'content',
		'updated_at',
	),
)); ?>
