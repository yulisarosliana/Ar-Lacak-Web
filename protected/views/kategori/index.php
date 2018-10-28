<?php
/* @var $this KategoriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kategoris',
);

$this->menu=array(
	array('label'=>'Create Kategori', 'url'=>array('create')),
	array('label'=>'Manage Kategori', 'url'=>array('admin')),
);
?>

<h1>Kategoris</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
