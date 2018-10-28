<?php
/* @var $this KecelakaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kecelakaans',
);

$this->menu=array(
	array('label'=>'Create Kecelakaan', 'url'=>array('create')),
	array('label'=>'Manage Kecelakaan', 'url'=>array('admin')),
);
?>

<h1>Kecelakaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
