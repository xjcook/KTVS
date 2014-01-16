<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Učitelia',
);
if(Yii::app()->user->isGuest): 

else:
$this->menu=array(
	array('label'=>'Vytvoriť učiteľa', 'url'=>array('create')),
	array('label'=>'Spravovať učiteľov', 'url'=>array('admin')),
);
endif;
?>

<h1>Učitelia</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
