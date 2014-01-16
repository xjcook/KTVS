<?php
/* @var $this ScheduleController */
/* @var $scheduleModel Schedule */
/* @var $pageModel Page */

$this->breadcrumbs=array(
	'Rozvrhy'=>array('index'),
	'Vytvoriť rozvrh',
);

$this->menu=array(
	array('label'=>'Zoznam rozvrhov', 'url'=>array('index')),
	array('label'=>'Spravovať rozvrhy', 'url'=>array('admin')),
);
?>

<h1>Vytvoriť rozvrh</h1>

<?php $this->renderPartial('_form', array('scheduleModel'=>$scheduleModel,'pageModel'=>$pageModel)); ?>
