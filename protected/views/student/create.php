<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Študenti'=>array('index'),
	'Prihlásenie študenta',
);

$this->menu=array(
	array('label'=>'Zoznam študentov', 'url'=>array('index')),
	array('label'=>'Spravovať študentov', 'url'=>array('admin')),
);
?>

<h1>Prihlásenie študenta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
