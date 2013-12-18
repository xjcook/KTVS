<?php
/* @var $this StudentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Študenti',
);

$this->menu=array(
	array('label'=>'Vytovriť študenta', 'url'=>array('create')),
	array('label'=>'Spravovať študentov', 'url'=>array('admin')),
);
?>

<h1>Študenti</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
