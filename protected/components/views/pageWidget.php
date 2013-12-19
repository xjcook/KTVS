<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>

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
		<?php echo $form->error($model,'content'); ?>                                                
	</div>
		