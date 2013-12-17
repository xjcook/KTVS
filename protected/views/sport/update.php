<?php
/* @var $this SportController */
/* @var $model Sport */

$this->breadcrumbs=array(
	'Športy'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Úprava',
);

$this->menu=array(
	array('label'=>'Zoznam športov', 'url'=>array('index')),
	array('label'=>'Vytvoriť šport', 'url'=>array('create')),
	array('label'=>'Detail športu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Spravovať šport', 'url'=>array('admin')),
);
?>

<h1>Úprava <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>