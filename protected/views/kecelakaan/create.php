<?php
/* @var $this KecelakaanController */
/* @var $model Kecelakaan */

$this->breadcrumbs=array(
	'Kecelakaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kecelakaan', 'url'=>array('index')),
	array('label'=>'Manage Kecelakaan', 'url'=>array('admin')),
);
?>

<h1>Create Kecelakaan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>