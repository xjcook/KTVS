<?php
/* @var $this LeagueController */
/* @var $model El */

$this->breadcrumbs=array(
	'Els'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List El', 'url'=>array('index')),
	array('label'=>'Create El', 'url'=>array('create')),
	array('label'=>'View El', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage El', 'url'=>array('admin')),
);
?>

<h1>Update El <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>