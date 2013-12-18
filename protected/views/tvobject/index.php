<?php
/* @var $this TvobjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Objekty',
);

$this->menu=array(
	array('label'=>'Vytvoriť objekt', 'url'=>array('create')),
	array('label'=>'Spravovať objekt ', 'url'=>array('admin')),
);
?>

<h1>Objekty</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
