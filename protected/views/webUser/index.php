<?php
/* @var $this WebUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Web Users',
);

$this->menu=array(
	array('label'=>'Create WebUser', 'url'=>array('create')),
	array('label'=>'Manage WebUser', 'url'=>array('admin')),
);
?>

<h1>Web Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
