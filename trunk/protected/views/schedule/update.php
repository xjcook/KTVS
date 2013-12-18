<?php
/* @var $this ScheduleController */
/* @var $scheduleModel Schedule */
/* @var $pageModel Page */

$this->breadcrumbs=array(
	'Schedules'=>array('index'),
	$scheduleModel->id=>array('view','id'=>$scheduleModel->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Schedule', 'url'=>array('index')),
	array('label'=>'Create Schedule', 'url'=>array('create')),
	array('label'=>'View Schedule', 'url'=>array('view', 'id'=>$scheduleModel->id)),
	array('label'=>'Manage Schedule', 'url'=>array('admin')),
);
?>

<h1>Update Schedule <?php echo $scheduleModel->id; ?></h1>

<?php $this->renderPartial('_form', array('scheduleModel'=>$scheduleModel,'pageModel'=>$pageModel)); ?>