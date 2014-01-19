<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Novinky</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>new CActiveDataProvider('News', array('criteria'=>array(
		'condition'=>'important=true'))),
	'itemView'=>'/news/_view',
)); ?>