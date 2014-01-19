<?php
/* @var $this ScheduleController */
/* @var $model Schedule */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textField($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tvobject_id'); ?>
		<?php echo $form->textField($model,'tvobject_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Vyhľadať'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->