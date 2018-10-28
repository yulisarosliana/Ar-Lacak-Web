<?php
/* @var $this LokasiPentingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lokasi Pentings',
);

$this->menu=array(
	array('label'=>'Create LokasiPenting', 'url'=>array('create')),
	array('label'=>'Manage LokasiPenting', 'url'=>array('admin')),
);
?>

<h1>Lokasi Pentings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
