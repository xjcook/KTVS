<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Používateľia'=>array('index'),
	'Spravovať',
);

$this->menu=array(
	array('label'=>'Zoznam používateľov', 'url'=>array('index')),
	array('label'=>'Vytvoriť používateľa', 'url'=>array('create')),
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

<h1>Sprava používateľov </h1>

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
		'id',
		'name',
		'email',
		'password',
		'is_admin',
		'updated_at',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
