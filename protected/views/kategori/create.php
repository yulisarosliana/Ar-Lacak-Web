<?php
/* @var $this KategoriController */
/* @var $model Kategori */

$this->breadcrumbs=array(
	'Kategoris'=>array('index'),
	'Create',
);

$this->menu=array(
	// array('label'=>'List Kategori', 'url'=>array('index')),
	// array('label'=>'Manage Kategori', 'url'=>array('admin')),
);
?>

<!-- <h1>Create Kategori</h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>