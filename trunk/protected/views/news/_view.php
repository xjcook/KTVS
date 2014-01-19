<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">

	
    <div id="element">	
	<b><?php echo CHtml::link(CHtml::encode($data->title), array('/news/view','id'=>$data->id)); ?></b>
        <br />
	
		<?php $this->widget('ext.XReadMore.XReadMore', array(
         'showLink'=>true,
         'model'=>$data,
         'linkText'=> 'Čítaj viac',
		 'linkUrl'=>array('/news/view','id'=>$data->id),
         'attribute'=>'content',
         'maxChar'=>100,
       ));
    ?>
	<?php //echo CHtml::encode($data->content); ?>
	<br />

	
    </div>

</div>
