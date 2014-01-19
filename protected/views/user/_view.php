<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">
    
    <div id="element">
    
    <?php if(Yii::app()->user->isAdmin()): ?>
		<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	<?php else: ?>
		<?php echo CHtml::encode($data->name); ?>
	<?php endif ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->email)); ?>
	<br />

	<?php if(Yii::app()->user->isAdmin()): ?>
		<b><?php echo CHtml::encode($data->getAttributeLabel('is_admin')); ?>:</b>
		<?php echo CHtml::checkBox('is_admin',$data->is_admin,array('disabled'=>'disabled')); ?>
		<br />
	<?php endif ?>
	
    </div>

</div>