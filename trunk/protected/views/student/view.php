<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Študenti'=>array('index'),
	$model->name,
);
if(Yii::app()->user->isGuest):
$this->menu=array(
	array('label'=>'Zoznam študentov', 'url'=>array('index')));
else:
$this->menu=array(
	array('label'=>'Zoznam študentov', 'url'=>array('index')),
	array('label'=>'Vytvoriť študenta', 'url'=>array('create')),
	array('label'=>'Upraviť študenta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť študenta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať študentov', 'url'=>array('admin')),
);
endif;
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sport.name',
		'name',
		'email',
		'class',
		'phone',
		'skills',
		'updated_at',
	),
)); ?>
