<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Novinky'=>array('index'),
	'Správa',
);

$this->menu=array(
	array('label'=>'Zoznam noviniek', 'url'=>array('index')),
	array('label'=>'Vytvorenie novinky', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Správa noviniek</h1>

<?php echo CHtml::link('Pokročilé vyhľadávanie','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'sport_id',
		'title',
		'content',
		'valid_to',
		/*
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
