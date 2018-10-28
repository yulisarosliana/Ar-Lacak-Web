<?php
/* @var $this BeritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Beritas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	// array('label'=>'List Berita', 'url'=>array('index')),
	// array('label'=>'Create Berita', 'url'=>array('create')),
	// array('label'=>'View Berita', 'url'=>array('view', 'id'=>$model->id)),
	// array('label'=>'Manage Berita', 'url'=>array('admin')),
);
?>

<!-- <h1>Update Berita <?php echo $model->id; ?></h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>