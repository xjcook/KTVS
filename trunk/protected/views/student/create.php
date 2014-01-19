<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Študenti'=>array('index'),
	'Registracia študenta',
);

$this->menu=array(
	array('label'=>'Zoznam študentov', 'url'=>array('index')),
	array('label'=>'Spravovať študentov', 'url'=>array('admin')),
);
?>

<h1>Registrácia študenta</h1>
<p><b>POZOR! </b>Študent sa registruje iba <b>jedenkrát</b> počas svojho štúdia,
následne obdrží email s prihlasovacím linkom na svoju stránku študenta. 
<b>Odporúčame</b> ho dôkladne  <b>uložiť</b>. Po zadaní linku do prehliadača
bude študent presmerovaný na svoju stránku, kde sa môže prihlasovať/odhlasovať
na šport, akcie, kurzy a ďalšie podujatia </p><br />

<?php $this->renderPartial('_form', array('model'=>$model)); ?>