<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Akcie',
);

$this->menu=array(
	array('label'=>'Create El', 'url'=>array('create')),
	array('label'=>'Manage El', 'url'=>array('admin')),
);
?>

<h1>Akcie</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
