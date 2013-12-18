<?php
/* @var $this SportController */
/* @var $model Sport */

$this->breadcrumbs=array(
	'Športy'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Zoznam športov', 'url'=>array('index')),
	array('label'=>'Vytvoriť šport', 'url'=>array('create')),
	array('label'=>'Upraviť šport', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť šport', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Si si isty, že chceš zmazať šport?')),
	array('label'=>'Spravovať športy', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'schedule_id',
		'name',
		'description',
		'capacity',
		'updated_at',
	),
)); ?>
