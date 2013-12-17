<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $userModel User */

$this->breadcrumbs=array(
	'Kurzy'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Úprava',
);

$this->menu=array(
	array('label'=>'Zoznam kurzov', 'url'=>array('index')),
	array('label'=>'Vytvoriť kurz', 'url'=>array('create')),
	array('label'=>'Detail kurzu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Správať kurzy', 'url'=>array('admin')),
);
?>

<h1>Úprava <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'userModel'=>$userModel)); ?>
