<?php
/* @var $this CourseController */
/* @var $data Course */
?>

<div class="view">

	
    <div id="element">	
	<?php echo  CHtml::link(CHtml::encode($data->name),  array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->typeString); ?>
	<br />

   </div>


</div>