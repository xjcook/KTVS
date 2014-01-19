<?php
/* @var $this LeagueController */
/* @var $data El */
?>

<div class="view">

    <div id="element">	
    	<?php echo CHtml::link(CHtml::encode($data->name),  array('view', 'id'=>$data->id)); ?>
    	<br />
    
    	<?php echo CHtml::encode($data->description); ?>
    	<br />

    </div>	

</div>