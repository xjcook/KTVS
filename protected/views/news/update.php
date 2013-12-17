<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Novinky'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Úprava',
);

$this->menu=array(
	array('label'=>'Zoznam noviniek', 'url'=>array('index')),
	array('label'=>'Vytvorť novinku', 'url'=>array('create')),
	array('label'=>'Detail novinky', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Spravovať novinky', 'url'=>array('admin')),
);
?>

<h1>Úprava <?php echo $model->title?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>