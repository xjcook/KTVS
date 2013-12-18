<?php
/* @var $this ScheduleController */
/* @var $scheduleModel Schedule */
/* @var $pageModel Page */

$this->breadcrumbs=array(
	'Schedules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Schedule', 'url'=>array('index')),
	array('label'=>'Manage Schedule', 'url'=>array('admin')),
);
?>

<h1>Create Schedule</h1>

<?php $this->renderPartial('_form', array('scheduleModel'=>$scheduleModel,'pageModel'=>$pageModel)); ?>
