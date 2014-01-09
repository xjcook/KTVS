<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Kurzy'=>array('index'),
	'Správa',
);

$this->menu=array(
	array('label'=>'Zoznam kurzov', 'url'=>array('index')),
	array('label'=>'Vytvorenie kurzu', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#course-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Správa kurzov</h1>

<?php echo CHtml::link('Pokročilé vyhľadávanie','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'course-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
