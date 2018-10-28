<?php
/* @var $this KecelakaanController */
/* @var $model Kecelakaan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kecelakaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<!-- Form baru -->

	<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
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

                    <!-- Form Coba -->

<!-- <div class="col-md-6 col-md-offset-3">

                    <form class="form-label-left">
  <div class="form-group row" >
    <label for="id-user">ID User</label>
    <input type="text" class="form-control" id="id-user" placeholder="ID User">
  </div>
  <div class="form-group row">
    <label for="lokasi">Lokasi</label>
    <input type="text" class="form-control" id="lokasi" placeholder="Lokasi">
  </div>
  <div class="form-group row">
    <label for="foto">Foto</label>
    <input type="file" id="foto">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="form-group row">
    <label for="waktu-pelaporan">Waktu Pelaporan</label>
    <input type="text" class="form-control" id="waktu-pelaporan" placeholder="Waktu pelaporan">
  </div>
  <div class="form-group row">
    <label for="detail">Detail</label>
    <input type="text" class="form-control" id="detail" placeholder="Detail">
  </div>
  <div class="form-group row">
    <label for="lat">Latitude</label>
    <input type="text" class="form-control" id="lat" placeholder="Latitude">
  </div>
  <div class="form-group row">
    <label for="lng">Longitude</label>
    <input type="text" class="form-control" id="lng" placeholder="Langitude">
  </div>
  <div class="form-group">
    <button class="btn btn-primary" type="button">Cancel</button>
    <button class="btn btn-primary" type="reset">Reset</button>
    <button type="submit" class="btn btn-success">Submit</button>
  </div>
  
  
</form>

</div>
                    
                  </div>
                </div>
              </div>
            </div> -->

	<!--  -->

	<?php echo $form->errorSummary($model); ?>

<div class="col-md-6 col-md-offset-3">
	
    

  <div class="form-group">
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">ID User *</label>
    <div class="col-sm-9">
      <?php echo $form->textField($model,'id_user',array('class'=>'form-control', 'placeholder'=>'ID User','size'=>30,'maxlength'=>30)); ?>
    </div>
    <?php echo $form->error($model,'id_user'); ?>
  </div>
<div class="clearfix"></div>
	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Lokasi *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'lokasi',array('class'=>'form-control', 'placeholder'=>'Lokasi','size'=>50,'maxlength'=>50)); ?>
    </div>
		<?php echo $form->error($model,'lokasi'); ?>
	</div>
  <div class="clearfix"></div>

	<div class="form-group">
    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Foto *</label>
    <div clas="col-sm-9">
		  <?php echo $form->fileField($model,'foto',array('class'=>'form-control','size'=>60,'maxlength'=>255)); ?>
    </div>
		  <?php echo $form->error($model,'foto'); ?>
	</div>
  <div class="clearfix"></div>

	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Waktu pelaporan *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'waktu_pelaporan',array('class'=>'form-control', 'placeholder'=>'Waktu pelaporan','size'=>50,'maxlength'=>50)); ?>
    </div>
	</div>
  <div class="clearfix"></div>

	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Detail *</label>
		<div class="col-sm-9">
    <?php echo $form->textArea($model,'detail',array('class'=>'form-control', 'placeholder'=>'Detail','size'=>50,'maxlength'=>50)); ?>
   </div>
		<?php echo $form->error($model,'detail'); ?>
	</div>
  <div class="clearfix"></div>

	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Lat *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'lat',array('class'=>'form-control', 'placeholder'=>'Latitude','size'=>50,'maxlength'=>50)); ?>
    <div>
		<?php echo $form->error($model,'lat'); ?>
	</div>
  <div class="clearfix"></div>
</div>

	<div class="form-group">
		<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Lng *</label>
    <div class="col-sm-9">
		<?php echo $form->textField($model,'lng',array('class'=>'form-control', 'placeholder'=>'Longitude','size'=>50,'maxlength'=>50)); ?>
    </div>
		<?php echo $form->error($model,'lng'); ?>
	</div>
  <div class="clearfix"></div>

<div class="row buttons">
  
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
  </div>

</div>

	

<?php $this->endWidget(); ?>


</div>
</div>
<!-- form -->