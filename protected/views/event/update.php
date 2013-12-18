<?php
/* @var $this EventController */
/* @var $model El */

$this->breadcrumbs=array(
	'Akcie'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Upraviť',
);

$this->menu=array(
	array('label'=>'Zoznam akcií', 'url'=>array('index')),
	array('label'=>'Vytvoriť akciu', 'url'=>array('create')),
	array('label'=>'Detail akcie', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Spravovať akcie', 'url'=>array('admin')),
);
?>

<h1>Detail <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>