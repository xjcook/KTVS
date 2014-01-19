<?php
/* @var $this TvobjectController */
/* @var $model Tvobject */

$this->breadcrumbs=array(
	'Objekty'=>array('index'),
	$model->name,
);
if(Yii::app()->user->isGuest):
$this->menu=array(
	array('label'=>'Zoznam objektov', 'url'=>array('index')));
else:
$this->menu=array(
	array('label'=>'Zoznam objektov', 'url'=>array('index')),
	array('label'=>'Vytvoriť objekt', 'url'=>array('create')),
	array('label'=>'Upraviť objekt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť objekt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať objekt', 'url'=>array('admin')),
);
endif;
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	
		'updated_at',
	),
)); ?>
