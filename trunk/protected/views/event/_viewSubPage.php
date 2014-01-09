<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div class="view">
	<div id="element">	
   
    <?php echo CHtml::link(CHtml::encode($data->title), Yii::app()->request->baseUrl . '/event/viewSubPage/' . Yii::app()->getRequest()->getParam('id') . '/' . $data->id); ?>
   <!-- <?php echo CHtml::link(CHtml::encode($data->title),  array('view', 'id'=>Yii::app()->getRequest()->getParam('id'), 'id2'=>$data->id)); ?> -->
	<br />
	<?php $this->widget('ext.XReadMore.XReadMore', array(
         'showLink'=>true,
         'model'=>$data,
         'linkText' => 'Čítaj viac',
         'attribute'=>'content',
         'maxChar'=>100,
       ));
    ?>
	</div>
</div>