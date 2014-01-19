<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Študenti'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'¸Úprava',
);

$this->menu=array(
	array('label'=>'Zoznam študentov', 'url'=>array('index')),
	array('label'=>'Vytvoriť študenta', 'url'=>array('create')),
	array('label'=>'Detail študenta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Spravovať študenta', 'url'=>array('admin')),
);
?>

<h1>Uprava <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>