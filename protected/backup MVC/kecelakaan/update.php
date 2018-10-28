<?php
/* @var $this KecelakaanController */
/* @var $model Kecelakaan */

$this->breadcrumbs=array(
	'Kecelakaans'=>array('index'),
	$model->id_kecelekaan=>array('view','id'=>$model->id_kecelekaan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kecelakaan', 'url'=>array('index')),
	array('label'=>'Create Kecelakaan', 'url'=>array('create')),
	array('label'=>'View Kecelakaan', 'url'=>array('view', 'id'=>$model->id_kecelekaan)),
	array('label'=>'Manage Kecelakaan', 'url'=>array('admin')),
);
?>

<h1>Update Kecelakaan <?php echo $model->id_kecelekaan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>