<?php
/* @var $this TvobjectController */
/* @var $model Tvobject */

$this->breadcrumbs=array(
	'Objekty'=>array('index'),
	'Vytvorenie',
);

$this->menu=array(
	array('label'=>'Zoznam objektov', 'url'=>array('index')),
	array('label'=>'Spravovať objekty', 'url'=>array('admin')),
);
?>

<h1>Vytvorenie objektu</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>