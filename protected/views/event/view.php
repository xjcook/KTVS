<?php
/* @var $this EventController */
/* @var $model El */

$this->breadcrumbs=array(
	'Akcie'=>array('index'),
	$model->name,
);
if(Yii::app()->user->isGuest): 
$this->menu=array(
	array('label'=>'Zoznam akcií', 'url'=>array('index')));
else:
$this->menu=array(
	array('label'=>'Zoznam akcií', 'url'=>array('index')),
	array('label'=>'Vytvoriť akciu', 'url'=>array('create')),
	array('label'=>'Vytvoriť podstránku akcie', 'url'=>array('event/createSubPage')),
	array('label'=>'Upraviť akciu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť akciu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať akciu', 'url'=>array('admin')),
);
endif;
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>'Učitelia',
            'type'=>'raw',
            'value'=>implode(',', CHtml::listData($model->users,'id','name')),
		),
		'description',
	),
)); 
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewSubPage',
)); ?>
