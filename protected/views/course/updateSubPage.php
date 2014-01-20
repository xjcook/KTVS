<?php
/* @var $this CourseController */
/* @var $pageElModel PageEl */
/* @var $pageModel Page */

$this->breadcrumbs=array(
	'Kurzy'=>array('index'),
	'Upravenie podstránky',
);

$this->menu=array(
	array('label'=>'Zoznam kurzov', 'url'=>array('index')),
	array('label'=>'Spravovať kurzy', 'url'=>array('admin')),
);
?>

<h1>Upravenie podstránky Kurzu</h1>

<?php $this->renderPartial('_formSubPage', array(
	'pageElModel'=>$pageElModel, 
	'pageModel'=>$pageModel,
)); ?>
