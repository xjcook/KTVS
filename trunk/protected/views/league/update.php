<?php
/* @var $this LeagueController */
/* @var $model El */

$this->breadcrumbs=array(
	'Ligy'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Úprava',
);

$this->menu=array(
	array('label'=>'Zoznam líg', 'url'=>array('index')),
	array('label'=>'Vytvoriť ligu', 'url'=>array('create')),
	array('label'=>'Detail ligy', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Spravovať ligy', 'url'=>array('admin')),
);
?>

<h1>Úprava <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>