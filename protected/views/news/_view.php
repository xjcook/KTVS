<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">

	
    <div id="element">	
	<b><?php echo CHtml::link(CHtml::encode($data->title),  array('view', 'id'=>$data->id)); ?></b>
        <br />
	
		<?php $this->widget('ext.XReadMore.XReadMore', array(
         'showLink'=>true,
         'model'=>$data,
         'linkText' => 'Čítaj viac',
         'attribute'=>'content',
         'maxChar'=>100,
       ));
    ?>
	<?php //echo CHtml::encode($data->content); ?>
	<br />

	
    </div>

</div>
