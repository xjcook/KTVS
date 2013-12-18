<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Akcie',
);

$this->menu=array(
	array('label'=>'Vytvoriť akciu', 'url'=>array('create')),
	array('label'=>'Spravovať akcie', 'url'=>array('admin')),
);
?>

<h1>Akcie</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
