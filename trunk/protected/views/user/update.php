<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Učitelia'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Úprava',
);

$this->menu=array(
	array('label'=>'Zoznam učiteľov', 'url'=>array('index')),
	array('label'=>'Vytvoriť učiteľov', 'url'=>array('create')),
	array('label'=>'Detail učiteľov', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Spravovať učiteľov', 'url'=>array('admin')),
);
?>

<h1>Úprava <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>