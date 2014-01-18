<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div class="view">
	<div id="element">	
   
	<?php echo CHtml::link(CHtml::encode($data->title), Yii::app()->createUrl('/', array(
					'league'=>Yii::app()->getRequest()->getParam('id'), 'page'=>$data->id)
	)); ?>
	<br />
	<?php $this->widget('ext.XReadMore.XReadMore', array(
         'showLink'=>true,
         'model'=>$data,
         'linkText'=>'Čítaj viac',
		 'linkUrl'=>Yii::app()->createUrl('/', array('league'=>Yii::app()->getRequest()->getParam('id'), 'page'=>$data->id)),
         'attribute'=>'content',
         'maxChar'=>100,
       ));
    ?>
	</div>
</div>