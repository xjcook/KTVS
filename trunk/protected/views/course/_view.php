<?php
/* @var $this CourseController */
/* @var $data Course */
?>

<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo  CHtml::link(CHtml::encode($data->name),  array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->typeString); ?>
	<br />
                
	<br />

	


</div>