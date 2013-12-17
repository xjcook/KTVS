<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Používateľia'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Úprava',
);

$this->menu=array(
	array('label'=>'Zoznam používateľov', 'url'=>array('index')),
	array('label'=>'Vytvoriť používateľa', 'url'=>array('create')),
	array('label'=>'Detail používateľa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Spravovať používateľa', 'url'=>array('admin')),
);
?>

<h1>Úprava <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>