<?php
/* @var $this KecelakaanController */
/* @var $data Kecelakaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kecelekaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kecelekaan), array('view', 'id'=>$data->id_kecelekaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_pelaporan')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_pelaporan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail')); ?>:</b>
	<?php echo CHtml::encode($data->detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lng')); ?>:</b>
	<?php echo CHtml::encode($data->lng); ?>
	<br />

	*/ ?>

</div>