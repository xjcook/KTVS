<?php
/* @var $this CourseController */
/* @var $model El */

$this->breadcrumbs=array(
	'Kurzy'=>array('index'),
	$model->name,
);
if(Yii::app()->user->isGuest):
$this->menu=array(
	array('label'=>'Zoznam kurzov', 'url'=>array('index')));
else:
$this->menu=array(
	array('label'=>'Zoznam kurzov', 'url'=>array('index')),
	array('label'=>'Vytvoriť kurz', 'url'=>array('create')),
	array('label'=>'Vytvoriť podstránku kurzu', 'url'=>array('course/createSubPage')),
	array('label'=>'Upraviť kurz', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť kurz', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať kurzy', 'url'=>array('admin')),
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
)); ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewSubPage',
)); ?>
