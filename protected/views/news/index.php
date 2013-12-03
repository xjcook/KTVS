<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Novinky',
);

$this->menu=array(
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1>Novinky</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
