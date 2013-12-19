<?php
/* @var $this ScheduleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rozvrh',
);

$this->menu=array(
	array('label'=>'Vytvoriť rozvrh', 'url'=>array('create')),
	array('label'=>'Spravovať rozvrh', 'url'=>array('admin')),
);
?>

<h1>Rozvrh</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
