<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Stránky'=>array('index'),
	$model->title,
);
if(Yii::app()->user->isGuest):
$this->menu=array(
	array('label'=>'Zoznam stránok', 'url'=>array('index')));
else:
$this->menu=array(
	array('label'=>'Zoznam stránok', 'url'=>array('index')),
	array('label'=>'Vytvoriť stránky', 'url'=>array('create')),
	array('label'=>'Upraviť stránku', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť stránku', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať stránky', 'url'=>array('admin')),
);
endif;
?>

<h1><?php echo $model->title; ?></h1>

	<b><?php echo CHtml::encode($model->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($model->title); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::decode($model->content); ?>
	<br />
