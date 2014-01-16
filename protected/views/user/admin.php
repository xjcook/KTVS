<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Učitelia'=>array('index'),
	'Spravovať učiteľov',
);

$this->menu=array(
	array('label'=>'Zoznam učiteľov', 'url'=>array('index')),
	array('label'=>'Vytvoriť učitela', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Správa učiteľov</h1>

<?php echo CHtml::link('Pokročilé vyhľadávanie','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		'email',
		'is_admin',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
