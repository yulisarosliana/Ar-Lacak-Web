<?php
/* @var $this KategoriController */
/* @var $model Kategori */

$this->breadcrumbs=array(
	'Kategoris'=>array('index'),
	$model->id_kategori=>array('view','id'=>$model->id_kategori),
	'Update',
);

$this->menu=array(
	// array('label'=>'List Kategori', 'url'=>array('index')),
	// array('label'=>'Create Kategori', 'url'=>array('create')),
	// array('label'=>'View Kategori', 'url'=>array('view', 'id'=>$model->id_kategori)),
	// array('label'=>'Manage Kategori', 'url'=>array('admin')),
);
?>

<!-- <h1>Update Kategori <?php echo $model->id_kategori; ?></h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>