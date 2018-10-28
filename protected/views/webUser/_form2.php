<?php
/* @var $this WebUserController */
/* @var $model WebUser */
/* @var $form CActiveForm */
?>

<?php
// initiate
// do not delete
$baseUrl = Yii::app()->request->baseUrl;
$modelIdKategori = Kategori::model()->getAllIdKategori();
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'web-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



	<!-- Form baru -->

	<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-user"></i> Akun Administrator <small><!-- different form elements --></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

  <!--  -->

<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
	<?php echo $form->errorSummary($model); ?>

	<div class="col-md-6 col-md-offset-3">
<p class="note">Form dengan tanda <span class="required">*</span> wajib diisi.</p>
	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Username *</label>
    	<div class="col-sm-9">
    	  <?php echo $form->textField($model,'username',array('class'=>'form-control has-feedback-left','required'=>'required', 'placeholder'=>'contoh: john','size'=>30,'maxlength'=>30)); ?>
        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
   		</div>
   		 <?php echo $form->error($model,'username'); ?>
  	</div>
	<div class="clearfix"></div>
  <br>

	<!-- <div class="form-group">
   		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Password Baru*</label>
    	<div class="col-sm-9">
      	 <form>
          <input type="text" name="password1" class="form-control has-feedback-left" placeholder="contoh: password_aman">
          <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
         </form>
      </div>
    	
 	</div>
	<div class="clearfix"></div>
  <br> -->

  <div class="form-group">
      <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Password *</label>
      <div class="col-sm-9">
        <?php echo $form->passwordField($model,'password',array('class'=>'form-control has-feedback-left','required'=>'required','value'=>'','placeholder'=>'contoh: masukkan_password_baru','size'=>50,'maxlength'=>50)); ?>
      <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
      </div>
      <?php echo $form->error($model,'password'); ?>
  </div>
  <div class="clearfix"></div>
  <br>

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Nama Lengkap *</label>
   		<div class="col-sm-9">
     	<?php echo $form->textField($model,'nama_lengkap',array('class'=>'form-control has-feedback-left','required'=>'required', 'placeholder'=>'contoh: john doe','size'=>50,'maxlength'=>50)); ?>
      <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
    	</div>
   		<?php echo $form->error($model,'nama_lengkap'); ?>
  	</div>
	<div class="clearfix"></div>
  <br>

	<div class="form-group">
   		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">No Identitas *</label>
    	<div class="col-sm-9">
      	<?php echo $form->numberField($model,'no_identitas',array('class'=>'form-control has-feedback-left','required'=>'required', 'placeholder'=>'contoh: 12345','size'=>20,'maxlength'=>20)); ?>
        <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
    	</div>
    	<?php echo $form->error($model,'no_identitas'); ?>
  	</div>
	<div class="clearfix"></div>
  <br>

	<div class="form-group">
   		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Email *</label>
    	<div class="col-sm-9">
      	<?php echo $form->textField($model,'email',array('class'=>'form-control has-feedback-left','required'=>'required', 'placeholder'=>'contoh: johndoe@arlacak.com','size'=>50,'maxlength'=>50)); ?>
        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
    	</div>
    	<?php echo $form->error($model,'email'); ?>
  	</div>
	<div class="clearfix"></div>
  <br>



  <!-- coba bikin select form -->
  
  <div class="form-group">
      <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Kategori Admin*</label>
      <div class="col-sm-9">
        <?php
        $opt = CHtml::listData(Kategori::model()->getAllNamaKategori(),'id_kategori','keterangan');
        echo $form->dropDownList($model,'id_kategori',$opt,array('class'=>'form-control has-feedback-left','required'=>'required','disabled'=>'disabled'));
        ?>
        <span class="fa fa-tasks form-control-feedback left" aria-hidden="true"></span>
      </div>
      <?php echo $form->error($model,'id_kategori'); ?>
    </div>
  <div class="clearfix"></div>
  <br>


	<div class="col-md-6 col-md-offset-4">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan Akun' : 'Save', array('class'=>'btn btn-primary')); ?>
    <?php echo CHtml::Button('Batal',array('onClick'=>"location='$baseUrl/index.php/webUser/admin'", 'class'=>'btn btn-default')); ?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- form -->