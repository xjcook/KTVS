<?php
/* @var $this ScheduleController */
/* @var $scheduleModel Schedule */
/* @var $pageModel Page */

$this->breadcrumbs=array(
	'Rozvrhy'=>array('index'),
	$scheduleModel->id=>array('view','id'=>$scheduleModel->id),
	'Upraviť',
);

$this->menu=array(
	array('label'=>'Zoznam rozvrhov', 'url'=>array('index')),
	array('label'=>'Vytvoriť rozvrh', 'url'=>array('create')),
	array('label'=>'Zobraziť rozvrh', 'url'=>array('view', 'id'=>$scheduleModel->id)),
	array('label'=>'Spravovať rozvrh', 'url'=>array('admin')),
);
?>

<h1>Update Schedule <?php echo $scheduleModel->id; ?></h1>

<?php $this->renderPartial('_form', array('scheduleModel'=>$scheduleModel,'pageModel'=>$pageModel)); ?>