<?php
/* @var $this LeagueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Els',
);

$this->menu=array(
	array('label'=>'Create El', 'url'=>array('create')),
	array('label'=>'Manage El', 'url'=>array('admin')),
);
?>

<h1>Els</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
