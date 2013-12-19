<?php
/* @var $this SportController */
/* @var $model Sport */

$this->breadcrumbs=array(
	'Šport'=>array('index'),
	'Správa',
);

$this->menu=array(
	array('label'=>'Zoznam športov', 'url'=>array('index')),
	array('label'=>'Vytvoriť šport', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sport-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Spravovať športy</h1>

<?php echo CHtml::link('Pokročilé vyhľadávanie','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sport-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'schedule_id',
		'name',
		'description',
		'capacity',
		'updated_at',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
