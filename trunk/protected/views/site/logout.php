<?php

$this->pageTitle=Yii::app()->name . ' - Logout';
$this->breadcrumbs=array(
	'Logout',
);
?>

<?php echo Yii::app()->user->email; ?>
<?php echo CHtml::button('Odhlásiť', array('submit' => array('site/logout'), 'class' => 'prihlas')); ?>
