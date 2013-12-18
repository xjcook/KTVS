<?php
/* @var $this TvobjectController */
/* @var $model Tvobject */

$this->breadcrumbs=array(
	'Objekty'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Uprava',
);

$this->menu=array(
	array('label'=>'Zoznam objektov ', 'url'=>array('index')),
	array('label'=>'Vytvoriť objekt', 'url'=>array('create')),
	array('label'=>'Detail objektu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Spraovať objekty', 'url'=>array('admin')),
);
?>

<h1>Uprava objektu <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>