<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Študenti'=>array('index'),
	'Vytvorienie',
);

$this->menu=array(
	array('label'=>'Zoznam študentov', 'url'=>array('index')),
	array('label'=>'Spravovať študentov', 'url'=>array('admin')),
);
?>

<h1>Vytvorenie študenta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>