<?php
/* @var $this LeagueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ligy',
);

$this->menu=array(
	array('label'=>'Vyvtvoriť ligu', 'url'=>array('create')),
	array('label'=>'Spravovať ligy', 'url'=>array('admin')),
);
?>

<h1>Ligy</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
