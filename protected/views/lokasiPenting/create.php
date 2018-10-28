<?php
/* @var $this LokasiPentingController */
/* @var $model LokasiPenting */

$this->breadcrumbs=array(
	'Lokasi Pentings'=>array('index'),
	'Create',
);

$this->menu=array(
	// array('label'=>'List LokasiPenting', 'url'=>array('index')),
	// array('label'=>'Manage LokasiPenting', 'url'=>array('admin')),
);
?>

<!-- <h1>Tambah Pos Polisi</h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>