<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Kurzy'=>array('index'),
	$model->name,
);
if(Yii::app()->user->isGuest): 
$this->menu=array(
array('label'=>'Zoznam kurzov', 'url'=>array('index')));
else:
$this->menu=array(
	array('label'=>'Zoznam kurzov', 'url'=>array('index')),
	array('label'=>'Vytvorť kurz', 'url'=>array('create')),
	array('label'=>'Upraviť kurz', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstráňiť kurz', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Určite chceš odstrániť túto položku?')),
	array('label'=>'Spravovať kurzy', 'url'=>array('admin')),
);
endif;
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'description',
		'typeString',
	),
)); ?>
