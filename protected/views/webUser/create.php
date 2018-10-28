<?php
/* @var $this WebUserController */
/* @var $model WebUser */

$this->breadcrumbs=array(
	'Web Users'=>array('index'),
	'Create',
);

$this->menu=array(
	// array('label'=>'List WebUser', 'url'=>array('index')),
	// array('label'=>'Manage WebUser', 'url'=>array('admin')),
);
?>

<!-- <h1>Create WebUser</h1> -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>