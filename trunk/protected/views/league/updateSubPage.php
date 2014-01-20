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

<?php $this->renderPartial('_formSubPage', array(
	'pageElModel'=>$pageElModel, 
	'pageModel'=>$pageModel,
)); ?>
