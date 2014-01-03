<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Novinky'=>array('index'),
	$model->title,
);
if(Yii::app()->user->isGuest):
$this->menu=array(
	array('label'=>'Zoznam noviniek', 'url'=>array('index')));
else:
$this->menu=array(
	array('label'=>'Zoznam noviniek', 'url'=>array('index')),
	array('label'=>'Vytovriť novinku', 'url'=>array('create')),
	array('label'=>'Upraviť novinku', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť novinku', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať novinky', 'url'=>array('admin')),
);
endif;
?>

<h1><?php echo $model->title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'sport_id',
		'title',
		'content',
		'valid_to',
		'updated_at',
	),
)); ?>
