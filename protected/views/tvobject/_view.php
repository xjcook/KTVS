<?php
/* @var $this TvobjectController */
/* @var $data Tvobject */
?>

<div class="view">

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('sport_id')); ?>:</b>
	<?php echo CHtml::encode($data->sport_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('map')); ?>:</b>
	<?php echo CHtml::encode($data->map); ?>
	<br />

	
	<br />


</div>