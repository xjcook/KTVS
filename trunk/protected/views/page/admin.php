<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Stránky'=>array('index'),
	'Spravovať',
);

$this->menu=array(
	array('label'=>'Zoznam stránok ', 'url'=>array('index')),
	array('label'=>'Vytvoriť stránku', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#page-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Spravovať stránky</h1>

<?php echo CHtml::link('Pokročilé vyhľadávanie','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'page-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'title',
		'content',
		'updated_at',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
