<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<?php if(Yii::app()->user->isGuest): ?>
	<h1>Prihlásenie</h1>
	
	<p>Prosím vyplnte vaše prihlasovacie údaje :</p>
	
	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
	
		<p class="note">Políčka s <span class="required">*</span> sú povinné</p>
	
		<div class="row">
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username'); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
			<p class="hint">
				Nápoveda: môžeš sa prihlásiť s <kbd>admin@admin.com</kbd>/<kbd>admin</kbd> alebo <kbd>user@user.com</kbd>/<kbd>user</kbd>.
			</p>
		</div>
	
		<div class="row rememberMe">
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</div>
	
		<div class="row buttons">
			<?php echo CHtml::submitButton('Login', array('class' => 'prihlas')); ?>
		</div>
	
	<?php $this->endWidget(); ?>
	</div><!-- form -->
<?php else: ?>
	<?php echo CHtml::button('Odhlásiť sa', array('submit' => array('site/logout'), 'class' => 'prihlas')); ?>
<?php endif; ?>
