<?php
/* @var $this LeagueController */
/* @var $model El */

$this->breadcrumbs=array(
	'Ligy'=>array('index'),
	$model->name,
);
if(Yii::app()->user->isGuest):
$this->menu=array(
	array('label'=>'Zoznam líg', 'url'=>array('index')));
else:
$this->menu=array(
	array('label'=>'Zoznam líg', 'url'=>array('index')),
	array('label'=>'Vytvoriť ligu', 'url'=>array('create')),
	array('label'=>'Vytvoriť podstránku ligy', 'url'=>array('league/createSubPage')),
	array('label'=>'Upraviť ligu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť ligu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať ligy', 'url'=>array('admin')),
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
