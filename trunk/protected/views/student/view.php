<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Študenti'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Zoznam študentov', 'url'=>array('index')),
	array('label'=>'Vytvoriť študenta', 'url'=>array('create')),
	array('label'=>'Upraviť študenta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť študenta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať študentov', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'class',
		'phone',
		'skills',
		'updated_at',
	),
)); ?>
