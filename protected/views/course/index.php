<?php
/* @var $this CourseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kurzy',
);

$this->menu=array(
	array('label'=>'Vytvoriť kurz', 'url'=>array('create')),
	array('label'=>'Spravovať kurzy', 'url'=>array('admin')),
);
?>

<h1>Kurzy</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
