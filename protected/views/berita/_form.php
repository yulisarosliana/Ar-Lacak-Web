<?php
/* @var $this BeritaController */
/* @var $model Berita */
/* @var $form CActiveForm */
?>

<?php
// initiate
// do not delete
$baseUrl = Yii::app()->request->baseUrl;
date_default_timezone_set('Asia/Jakarta');
$date = date("Y-m-d G:i:s");
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'berita-form',
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
                    <h2><i class="fa fa-pencil-square-o"></i> Edit Berita Terbaru <small><!-- different form elements --></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Judul *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'judul',array('class'=>'form-control has-feedback-left', 'placeholder'=>'Judul','size'=>60,'maxlength'=>100)); ?>
    <span class="fa fa-text-width form-control-feedback left" aria-hidden="true"></span>
    </div>
		<?php echo $form->error($model,'judul'); ?>
	</div>
  <div class="clearfix"></div>
  <br>

	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Tanggal Post *</label>
		<div class="col-sm-9">
    <?php echo $form->textField($model,'tanggal',array('class'=>'form-control has-feedback-left','value'=>$date, 'placeholder'=>'tanggal post','required'=>'required','readonly'=>'readonly','size'=>50,'maxlength'=>50)); ?>
    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
   </div>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>
  <div class="clearfix"></div>
  <br>
	
	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Isi *</label>
    	<div class="col-sm-9">
		<?php echo $form->textArea($model,'isi',array('class'=>'form-control has-feedback-left', 'placeholder'=>'isi konten','required'=>'required','cols'=>60,'rows'=>5)); ?>
    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
   		</div>
		<?php echo $form->error($model,'isi'); ?>
		</div>
  	<div class="clearfix"></div>
    <br>

	<div class="form-group">
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Foto *</label>
      <div class="col-sm-9">
    <?php echo $form->fileField($model,'gambar',array('size'=>50,'maxlength'=>50, 'id'=>'gambar','required'=>'required','class'=>'btn-file m-b')); ?>
      </div>
    <?php echo $form->error($model,'gambar'); ?>
    </div>
    <div class="clearfix"></div>
    <br>

	<div class="col-md-6 col-md-offset-4">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan Berita Terbaru' : 'Save', array('class'=>'btn btn-primary')); ?>
    <?php echo CHtml::Button('Batal',array('onClick'=>"location='$baseUrl/index.php/berita/admin'", 'class'=>'btn btn-default')); ?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
