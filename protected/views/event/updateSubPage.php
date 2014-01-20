<?php
/* @var $this EventController */
/* @var $pageElModel PageEl */
/* @var $pageModel Page */

$this->breadcrumbs=array(
	'Akcie'=>array('index'),
	'Upravenie podstránky',
);

$this->menu=array(
	array('label'=>'Zoznam akcií ', 'url'=>array('index')),
	array('label'=>'Spravovať akcie', 'url'=>array('admin')),
);
?>

<h1>Upravenie podstránky Akcie</h1>

<?php $this->renderPartial('_formSubPage', array(
	'pageElModel'=>$pageElModel, 
	'pageModel'=>$pageModel,
)); ?>
