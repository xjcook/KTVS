<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Používateľia',
);
if(Yii::app()->user->isGuest): 

else:
$this->menu=array(
	array('label'=>'Vytvoriť používateľa', 'url'=>array('create')),
	array('label'=>'Spraovať používateľov', 'url'=>array('admin')),
);
endif;
?>

<h1>Používatelia</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
