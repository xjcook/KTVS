<?php
/* @var $this ScheduleController */
/* @var $model Schedule */

$this->breadcrumbs=array(
	'Schedules'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Schedule', 'url'=>array('index')),
	array('label'=>'Create Schedule', 'url'=>array('create')),
	array('label'=>'Update Schedule', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Schedule', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Schedule', 'url'=>array('admin')),
);
?>

<h1>View Schedule #<?php echo $model->id; ?></h1>

<b><?php echo CHtml::encode($model->page->getAttributeLabel('title')); ?>:</b>
<?php echo CHtml::encode($model->page->title); ?>
<br />

<b><?php echo CHtml::encode($model->page->getAttributeLabel('content')); ?>:</b>
<?php echo CHtml::decode($model->page->content); ?>
<br />

<b><?php echo CHtml::encode($model->getAttributeLabel('tvobject_id')); ?>:</b>
<?php echo CHtml::encode($model->tvobject->name); ?>
<br />
