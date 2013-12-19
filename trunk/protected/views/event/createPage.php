<?php
/* @var $this EventController */
/* @var $eventModel El */
/* @var $pageModel Page */

$this->breadcrumbs=array(
	'Akcie'=>array('index'),
	'Vytvorenie',
);

$this->menu=array(
	array('label'=>'Zoznam akcií ', 'url'=>array('index')),
	array('label'=>'Spravovať akcie', 'url'=>array('admin')),
);
?>

<h1>Vytvorenie podstránky Akcie</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($pageModel); ?>

	<?php //echo $form->labelEx($pageModel,'events'); ?><br/>
	<?php echo $form->dropDownList($pageModel,'event_id',
			CHtml::listData(El::model()->findAll(),'id','name')); ?>
	<?php //echo $form->error($pageModel,'events'); ?>
	
	<?php $this->widget('application.components.PageWidget', array('model'=>$pageModel,'form'=>$form)); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($pageModel->isNewRecord ? 'Vytvoriť' : 'Uložiť'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
