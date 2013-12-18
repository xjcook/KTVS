<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">
    
    <div id="element">
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->email)); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_admin')); ?>:</b>
	<?php echo CHtml::checkBox('is_admin',$data->is_admin,array('disabled'=>'disabled')); ?>
	<br />
	
    </div>

</div>