<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Používatelia'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Zoznam používateľov', 'url'=>array('index')),
	array('label'=>'Vytvoriť používateľa', 'url'=>array('create')),
	array('label'=>'Upraviť používateľa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť používateľa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať používateľov', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'email',
		'name',
		'is_admin',
	),
)); ?>
