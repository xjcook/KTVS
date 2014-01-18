<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Akcie',
);
if(Yii::app()->user->isGuest): 

else:
$this->menu=array(
	array('label'=>'Vytvoriť akciu', 'url'=>array('create')),
	array('label'=>'Vytvoriť podstránku akcie', 'url'=>array('event/createSubPage')),
	array('label'=>'Spravovať akcie', 'url'=>array('admin')),
);
endif;

?>

<h1>Akcie</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
