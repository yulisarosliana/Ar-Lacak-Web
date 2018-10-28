<?php
/* @var $this LokasiPentingController */
/* @var $model LokasiPenting */

$this->breadcrumbs=array(
	'Lokasi Pentings'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LokasiPenting', 'url'=>array('index')),
	array('label'=>'Create LokasiPenting', 'url'=>array('create')),
	array('label'=>'View LokasiPenting', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LokasiPenting', 'url'=>array('admin')),
);
?>

<!-- <h1>Update LokasiPenting <?php echo $model->id; ?></h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>