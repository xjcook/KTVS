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

	<?php echo $form->errorSummary($scheduleModel); ?>
	
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
	
	<div class="tinymce">
        <?php echo $form->labelEx($scheduleModel,'content'); ?><br />
		<?php $this->widget('application.extensions.tinymce.ETinyMce',
			array(
				'model'=>$scheduleModel,
                'attribute'=>'content',
                'editorTemplate'=>'full',
				'htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'tinymce'),
                'options' => array(
                	'theme_advanced_buttons1' =>
                    	'undo,redo,|,bold,italic,underline,|,outdent, indent,|,advhr,|,sub,sup,|,bullist,numlist,|,fontsizeselect,',
                    'theme_advanced_buttons2' => 'tablecontrols,|,cut,copy,paste',
                    'theme_advanced_buttons3' => '',
                    'theme_advanced_buttons4' => '',
                    'theme_advanced_toolbar_location' => 'top',
                    'theme_advanced_toolbar_align' => 'left',
                    'theme_advanced_statusbar_location' => 'none',
                    'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt"
			)
		)); ?>            
		<?php echo $form->error($scheduleModel,'content'); ?>                                                
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($scheduleModel->isNewRecord ? 'Vytvoriť' : 'Uložiť'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

