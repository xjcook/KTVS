<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div class="view">
	<div id="element">	
   
	<?php echo CHtml::link(CHtml::encode($data->title),  array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::decode($data->content); ?>
	<br />
	</div>
</div>