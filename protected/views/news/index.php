<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Novinky',
);
if(Yii::app()->user->isGuest): 

else:
$this->menu=array(
	array('label'=>'Vytvoriť novinku', 'url'=>array('create')),
	array('label'=>'Spravovať novinky', 'url'=>array('admin')),
);
endif;

?>

<h1>Novinky</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
