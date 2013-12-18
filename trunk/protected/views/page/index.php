<?php
/* @var $this PageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stránky',
);

$this->menu=array(
	array('label'=>'Vytvoriť stránku', 'url'=>array('create')),
	array('label'=>'Spravovať stránky', 'url'=>array('admin')),
);
?>

<h1>Stránky</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
