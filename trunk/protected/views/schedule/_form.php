<?php
/* @var $this ScheduleController */
/* @var $model Schedule */
/* @var $pageModel Page */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'schedule-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($scheduleModel); ?>

	<div class="row">
		<?php echo $form->labelEx($scheduleModel,'tvobject_id'); ?><br/>
		<?php echo $form->listBox($scheduleModel,'tvobject_id',
				CHtml::listData(Tvobject::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($scheduleModel,'tvobject_id'); ?>
	</div>
	
	<?php $this->widget('application.components.PageWidget', array('model'=>$pageModel,'form'=>$form)); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($scheduleModel->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

