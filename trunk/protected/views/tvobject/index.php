<?php
/* @var $this TvobjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Objekty',
);
if(Yii::app()->user->isGuest): 

else:
$this->menu=array(
	array('label'=>'Vytvoriť objekt', 'url'=>array('create')),
	array('label'=>'Spravovať objekt ', 'url'=>array('admin')),
);
endif;
?>

<h1>Objekty</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
