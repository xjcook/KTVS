<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sign-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sport_id'); ?>
		<?php echo $form->dropDownList($model,'sport_id',
				CHtml::listData(Sport::model()->findAll(),'id','name'), array('empty' => 'Vyberte šport')); ?>
		<?php echo $form->error($model,'sport_id'); ?>
		
		<?php echo $form->labelEx($model,'skills'); ?>
		<?php echo $form->dropDownList($model,'skills', 
              array('začiatočník' => 'začiatočník', 'mierne pokročilý' => 'mierne pokročilý', 'pokročilý' => 'pokročilý'),
              array('empty' => 'Vyberte skúsenosti')); ?>
        <?php echo $form->error($model,'skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'els', array('label'=>'Liga')); ?>
		<?php echo $form->dropDownList($model,'els',
				CHtml::listData(El::model()->findAll(),'id','name'), array('empty'=>'Vyberte ligu')); ?>
		<?php echo $form->error($model,'els'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Vytvoriť' : 'Uložiť'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->