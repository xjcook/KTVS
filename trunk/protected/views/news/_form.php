<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'user_id', array('value'=>Yii::app()->user->id)); ?>

	<div class="row">
	<!--	<?php echo $form->labelEx($model,'sport_id'); ?>
		<?php echo $form->textField($model,'sport_id'); ?>
		<?php echo $form->error($model,'sport_id'); ?> -->

		<?php echo $form->labelEx($model,'sport_id'); ?>
		<?php echo $form->dropDownList($model,'sport_id',
				CHtml::listData(Sport::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'sport_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valid_to'); ?>
		<?php echo $form->textField($model,'valid_to'); ?>
		<?php echo $form->error($model,'valid_to'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Vytvoriť' : 'Uložiť'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
