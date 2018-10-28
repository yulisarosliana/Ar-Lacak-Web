<?php
/* @var $this BeritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Beritas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Berita', 'url'=>array('index')),
	array('label'=>'Manage Berita', 'url'=>array('admin')),
);
?>

<h1>Create Berita</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>