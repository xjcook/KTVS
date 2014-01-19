<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Učitelia'=>array('index'),
	$model->name,
);
if(Yii::app()->user->isGuest):
$this->menu=array(
	array('label'=>'Zoznam učiteľov', 'url'=>array('index')));
else:
$this->menu=array(
	array('label'=>'Zoznam učiteľov', 'url'=>array('index')),
	array('label'=>'Vytvoriť učiteľa', 'url'=>array('create')),
	array('label'=>'Upraviť učiteľa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť učiteľa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať učiteľov', 'url'=>array('admin')),
);
endif;
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'email',
		'name',
    'description',
    'consultation',
		'is_admin',
	),
)); ?>
