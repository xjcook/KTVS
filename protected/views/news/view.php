<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Novinky'=>array('index'),
	$model->title,
);
if(Yii::app()->user->isGuest):
$this->menu=array(
	array('label'=>'Zoznam noviniek', 'url'=>array('index')));
else:
$this->menu=array(
	array('label'=>'Zoznam noviniek', 'url'=>array('index')),
	array('label'=>'Vytvoriť novinku', 'url'=>array('create')),
	array('label'=>'Upraviť novinku', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Odstrániť novinku', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Spravovať novinky', 'url'=>array('admin')),
);
endif;
?>

<h1><?php echo $model->title; ?></h1>

  <div id="element">	
  	<?php echo CHtml::decode($model->content); ?>
  </div >	
