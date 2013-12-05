<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'user_id',array('value'=>Yii::app()->user->id)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	
		<div class="tinymce">
               <?php echo $form->labelEx($model,'content'); ?><br />
                <?php $this->widget('application.extensions.tinymce.ETinyMce',
                 array(
                'model'=>$model,
                'attribute'=>'content',
                'editorTemplate'=>'full',
                 'htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'tinymce'),
                     'options' => array(
                                                                                                                        'theme_advanced_buttons1' =>
                                                                                                                       'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,advhr,|,sub,sup,|,bullist,numlist,|,formatselect,fontselect,fontsizeselect,',
                                                                                                                        'theme_advanced_buttons2' => 'tablecontrols,|,removeformat,visualaid,cut,copy,paste,pastetext,pasteword,|,search,replace,',
                                                                                                                        'theme_advanced_buttons3' => '',
                                                                                                                        'theme_advanced_buttons4' => '',
                                                                                                                        'theme_advanced_toolbar_location' => 'top',
                                                                                                                        'theme_advanced_toolbar_align' => 'left',
                                                                                                                        'theme_advanced_statusbar_location' => 'none',
                                                                                                                        'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
                                                                                                                                                        15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
                                                                                                                        )
                                                                                                )); ?>            
               <?php echo $form->error($model,'content'); ?>                                                
</div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->