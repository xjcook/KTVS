<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php echo CHtml::link('Gii Code Generator (password: gii)',array('gii/default/index')); ?><br/>

<?php echo CHtml::link('Users',array('user/index')); ?><br/>

<?php echo CHtml::link('Pages',array('page/index')); ?><br/>

<?php echo CHtml::link('Prihlásenie na šport',array('student/create')); ?><br/>

<?php echo CHtml::link('Rozvrhy',array('schedule/index')); ?><br/>

<?php echo CHtml::link('Telovýchovné objekty',array('tvobject/index')); ?><br/>
