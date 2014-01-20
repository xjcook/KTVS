<?php
/* @var $this EventController */
/* @var $pageElModel PageEl */
/* @var $pageModel Page */

$this->breadcrumbs=array(
	'Ligy'=>array('index'),
	'Vytvorenie podstránky',
);

$this->menu=array(
	array('label'=>'Zoznam líg', 'url'=>array('index')),
	array('label'=>'Spravovať ligy', 'url'=>array('admin')),
);
?>

<h1>Vytvorenie podstránky Ligy</h1>

<?php $this->renderPartial('_formSubPage', array(
	'pageElModel'=>$pageElModel, 
	'pageModel'=>$pageModel,
)); ?>
