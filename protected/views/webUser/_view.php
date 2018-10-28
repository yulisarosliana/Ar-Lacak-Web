<?php
/* @var $this WebUserController */
/* @var $data WebUser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_web_user')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_web_user), array('view', 'id'=>$data->id_web_user)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_lengkap')); ?>:</b>
	<?php echo CHtml::encode($data->nama_lengkap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_identitas')); ?>:</b>
	<?php echo CHtml::encode($data->no_identitas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kategori')); ?>:</b>
	<?php echo CHtml::encode($data->id_kategori); ?>
	<br />


</div>