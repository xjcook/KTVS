<?php
/* @var $this ScheduleController */
/* @var $data Schedule */
?>

<div class="view">
  <div id="element">	
  	<b><?php echo CHtml::encode($data->getAttributeLabel('tvobject_id')); ?>:</b>
  	<?php echo CHtml::encode($data->tvobject->name); ?>
  	<br />
  
  	<?php echo CHtml::decode($data->content); ?>
  </div>
</div>