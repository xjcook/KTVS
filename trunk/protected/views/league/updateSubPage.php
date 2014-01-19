<?php
/* @var $this CourseController */
/* @var $pageElModel PageEl */
/* @var $pageModel Page */

$this->breadcrumbs=array(
	'Ligy'=>array('index'),
	'Upravenie podstránky',
);

$this->menu=array(
	array('label'=>'Zoznam líg ', 'url'=>array('index')),
	array('label'=>'Spravovať ligy', 'url'=>array('admin')),
);
?>

<h1>Upravenie podstránky ligy</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary(array($pageElModel, $pageModel)); ?>

	<?php echo $form->labelEx($pageElModel,'el_id', array('label'=>'Liga')); ?>
	<?php echo $form->dropDownList($pageElModel,'el_id',
			Yii::app()->user->getLeaguesListData(),
			array('empty'=>'Vyberte kurz')); ?>
	<?php echo $form->error($pageElModel,'el_id'); ?>
	
	<?php $this->widget('application.components.PageWidget', array('model'=>$pageModel,'form'=>$form)); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($pageElModel->isNewRecord ? 'Vytvoriť' : 'Uložiť'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
