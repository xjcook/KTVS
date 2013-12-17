<?php
/* @var $this LeagueController */
/* @var $model El */

$this->breadcrumbs=array(
	'Ligy'=>array('index'),
	'Vytvorenie',
);

$this->menu=array(
	array('label'=>'Zoznam líg', 'url'=>array('index')),
	array('label'=>'Spravovať ligy', 'url'=>array('admin')),
);
?>

<h1>Vytvorenie ligy</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>