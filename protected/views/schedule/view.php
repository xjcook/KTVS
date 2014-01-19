<?php
/* @var $this ScheduleController */
/* @var $model Schedule */

$this->breadcrumbs=array(
	'Rozvrhy'=>array('index'),
	$model->id,
);
if(Yii::app()->user->isGuest):
$this->menu=array(
	array('label'=>'Zoznam rozvrhov', 'url'=>array('index')));
else:
$this->menu=array(
	array('label'=>'Zoznam rozvrhov', 'url'=>array('index')),
	array('label'=>'Vytvoriť rozvrh', 'url'=>array('create')),
	array('label'=>'Upraviť rozvrh', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť rozvrh', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať rozvrh', 'url'=>array('admin')),
);
endif;
?>

<h1>Rozvrh pre <?php echo CHtml::encode($model->tvobject->name); ?></h1>

<?php echo CHtml::decode($model->content); ?>
