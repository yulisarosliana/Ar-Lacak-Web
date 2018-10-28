<?php
/* @var $this LokasiPentingController */
/* @var $model LokasiPenting */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lokasi-penting-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
  //tambahan izin menyimpan data
  'htmlOptions'=>array('enctype'=>'multipart/form-data','autocomplete'=>'off'),
)); ?>

	

	<!-- Form baru -->

	<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Pos Polisi <small><!-- different form elements --></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

	<!--  -->


	<?php echo $form->errorSummary($model); ?>

	<div class="col-md-6 col-md-offset-3">
    <p class="note">Form dengan tanda <span class="required">*</span> wajib diisi.</p>

	 <div class="form-group">
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Nama Lokasi *</label>
    <div class="col-sm-9">
      <?php echo $form->textField($model,'title',array('class'=>'form-control', 'placeholder'=>'contoh: Pos gurindam','size'=>30,'maxlength'=>30)); ?>
    </div>
    <?php echo $form->error($model,'title'); ?>
  </div>
<div class="clearfix"></div>
	<br>

	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Alamat *</label>
		<div class="col-sm-9">
    <?php echo $form->textArea($model,'streetAddress',array('class'=>'form-control', 'placeholder'=>'contoh: Jl. A. Yani','size'=>255,'maxlength'=>255)); ?>
   </div>
		<?php echo $form->error($model,'streetAddress'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Latitude *</label>
    <div class="col-sm-9">
		<?php echo $form->numberField($model,'lat',array('class'=>'form-control', 'placeholder'=>'contoh: 1.123456789','size'=>50,'maxlength'=>50)); ?>
    <div>
		<?php echo $form->error($model,'lat'); ?>
	</div>
</div>
  <div class="clearfix"></div>
  <br>

	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Longitude *</label>
    <div class="col-sm-9">
		<?php echo $form->numberField($model,'lng',array('class'=>'form-control', 'placeholder'=>'contoh: 0.123456','size'=>50,'maxlength'=>50)); ?>
    </div>
		<?php echo $form->error($model,'lng'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Altitude *</label>
    <div class="col-sm-9">
		<?php echo $form->numberField($model,'altitude',array('class'=>'form-control', 'placeholder'=>'contoh: 10','value'=>'0','size'=>50,'maxlength'=>50)); ?>
    </div>
		<?php echo $form->error($model,'altitude'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Deskripsi *</label>
		<div class="col-sm-9">
    <?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control', 'placeholder'=>'contoh: Kantor kepolisian sektor','size'=>50,'maxlength'=>50)); ?>
   </div>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

	
	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">No Telpon *</label>
    	<div class="col-sm-9">
		<?php echo $form->numberField($model,'number',array('class'=>'form-control', 'placeholder'=>'contoh: 076112345','size'=>20,'maxlength'=>20)); ?>
   		</div>
		<?php echo $form->error($model,'number'); ?>
		</div>
  	<div class="clearfix"></div>
    <br>

	<div class="form-group">
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Foto *</label>
      <div class="col-sm-9">
    <?php echo $form->fileField($model,'image',array('size'=>60,'maxlength'=>255, 'id'=>'image', 'class'=>'dropzone')); ?>
      </div>
    <?php echo $form->error($model,'image'); ?>
    </div>
    <div class="clearfix"></div>
    <br>




	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan Pos Polisi' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>


<?php $this->endWidget(); ?>


</div><!-- form -->