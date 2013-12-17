<?php
/* @var $this SportController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Športy',
);

$this->menu=array(
	array('label'=>'Vytvoriť šport', 'url'=>array('create')),
	array('label'=>'Správa športov', 'url'=>array('admin')),
);
?>

<h1>Športy</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
