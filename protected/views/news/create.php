<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Novinky'=>array('index'),
	'Vytvorenie',
);

$this->menu=array(
	array('label'=>'Zoznam noviniek', 'url'=>array('index')),
	array('label'=>'Spravovať novinky', 'url'=>array('admin')),
);
?>

<h1>Vytvorenie novinky</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>