<?php
/* @var $this TvobjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tvobjects',
);

$this->menu=array(
	array('label'=>'Create Tvobject', 'url'=>array('create')),
	array('label'=>'Manage Tvobject', 'url'=>array('admin')),
);
?>

<h1>Tvobjects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
