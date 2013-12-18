<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">

	
    <div id="element">	
	<b><?php echo CHtml::link(CHtml::encode($data->title),  array('view', 'id'=>$data->id)); ?></b>
        <br />
	
	<?php echo CHtml::encode($data->content); ?>
	<br />

	
    </div>

</div>