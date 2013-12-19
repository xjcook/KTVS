<?php
/* @var $this ScheduleController */
/* @var $data Schedule */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->page->title), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tvobject_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tvobject->name), array('tvobject/view', 'id'=>$data->id)); ?>
	<br />

</div>