<?php
/* @var $this ScheduleController */
/* @var $scheduleModel Schedule */
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

	<?php echo $form->errorSummary(array($scheduleModel, $pageModel)); ?>
	
	<div class="row">
		<?php echo $form->labelEx($scheduleModel,'class'); ?>
		<?php echo $form->dropDownList($scheduleModel,'class', 
              array('1' => '1.ročník', '2' => '2.ročník', '3' => '3.ročník', '4' => '4.ročník', '5' => '5.ročník'),
              array('empty' => 'Vyberte ročník')); ?>
        <?php echo $form->error($scheduleModel,'class'); ?>
	</div>

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

