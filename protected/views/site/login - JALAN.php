<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>



<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	
	<div class="form-group">
		<?php echo $form->textField($model,'username',array('type'=>'email','class'=>'form-control','placeholder'=>'Username', 'required'=>'')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->passwordField($model,'password', array('type'=>'password','class'=>'form-control','placeholder'=>'Password', 'required'=>'')); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	
	<div class="form-group">
		<?php echo CHtml::submitButton('Masuk', array('type'=>'submit','class'=>'btn btn-primary block full-width m-b')); ?>
	</div>
<p class="text-muted text-center"><small>Belum punya akun?</small></p>
	<div class="form-group">
		 <a class="btn btn-sm btn-white btn-block" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/webUser/create">Buat akun</a>
            
	</div>

<?php $this->endWidget(); ?>           
</div><!-- form -->
