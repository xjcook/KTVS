<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Stránky'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Úprava',
);

$this->menu=array(
	array('label'=>'Zoznam stránok', 'url'=>array('index')),
	array('label'=>'Vytvoriť stránku', 'url'=>array('create')),
	array('label'=>'Detail stránky', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Spravovať stránky', 'url'=>array('admin')),
);
?>

<h1>Úprava <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>