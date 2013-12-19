<?php
/* @var $this TvobjectController */
/* @var $data Tvobject */
?>

<div class="view">

	  <div id="element">

    	<?php echo CHtml::link(CHtml::encode($data->name),array('view', 'id'=>$data->id)); ?>
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
    	
    </div>

</div>