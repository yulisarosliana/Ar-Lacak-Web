<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
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


	<?php echo $form->errorSummary($model); ?>

	<div class="col-md-6 col-md-offset-3">

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Username *</label>
    	<div class="col-sm-9">
     		<?php echo $form->textField($model,'username',array('class'=>'form-control', 'placeholder'=>'Username','size'=>50,'maxlength'=>50)); ?>
   		</div>
    		<?php echo $form->error($model,'username'); ?>
  	</div>
	<div class="clearfix"></div>

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Password *</label>
    	<div class="col-sm-9">
     		<?php echo $form->textField($model,'password',array('class'=>'form-control', 'placeholder'=>'Password','size'=>255,'maxlength'=>255)); ?>
   		</div>
    		<?php echo $form->error($model,'password'); ?>
  	</div>
	<div class="clearfix"></div>

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">NIK *</label>
    	<div class="col-sm-9">
     		<?php echo $form->textField($model,'nik',array('class'=>'form-control', 'placeholder'=>'Nik','size'=>20,'maxlength'=>20)); ?>
   		</div>
    		<?php echo $form->error($model,'nik'); ?>
  	</div>
	<div class="clearfix"></div>

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Nama Lengkap *</label>
    	<div class="col-sm-9">
     		<?php echo $form->textField($model,'nama_lengkap',array('class'=>'form-control', 'placeholder'=>'Nama lengkap','size'=>50,'maxlength'=>50)); ?>
   		</div>
    		<?php echo $form->error($model,'nama_lengkap'); ?>
  	</div>
	<div class="clearfix"></div>

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Tempat Lahir *</label>
    	<div class="col-sm-9">
     		<?php echo $form->textField($model,'tempat_lahir',array('class'=>'form-control', 'placeholder'=>'Tempat lahir','size'=>20,'maxlength'=>20)); ?>
   		</div>
    		<?php echo $form->error($model,'tempat_lahir'); ?>
  	</div>
	<div class="clearfix"></div>

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Tanggal Lahir *</label>
    	<div class="col-sm-9">
     		<?php echo $form->dateField($model,'tanggal_lahir',array('class'=>'form-control', 'placeholder'=>'Tanggal lahir')); ?>
   		</div>
    		<?php echo $form->error($model,'tanggal_lahir'); ?>
  	</div>
	<div class="clearfix"></div>

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Jenis Kelamin *</label>
    	<div class="col-sm-9">
     		<?php echo $form->textField($model,'jenis_kelamin',array('class'=>'form-control', 'placeholder'=>'Jenis kelamin','size'=>1,'maxlength'=>1)); ?>
   		</div>
    		<?php echo $form->error($model,'jenis_kelamin'); ?>
  	</div>
	<div class="clearfix"></div>

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Alamat *</label>
    	<div class="col-sm-9">
     		<?php echo $form->textField($model,'alamat',array('class'=>'form-control', 'placeholder'=>'Alamat','size'=>60,'maxlength'=>255)); ?>
   		</div>
    		<?php echo $form->error($model,'alamat'); ?>
  	</div>
	<div class="clearfix"></div>

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Pekerjaan *</label>
    	<div class="col-sm-9">
     		<?php echo $form->textField($model,'pekerjaan',array('class'=>'form-control', 'placeholder'=>'Pekerjaan','size'=>20,'maxlength'=>20)); ?>
   		</div>
    		<?php echo $form->error($model,'pekerjaan'); ?>
  	</div>
	<div class="clearfix"></div>

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Email *</label>
    	<div class="col-sm-9">
     		<?php echo $form->textField($model,'email',array('class'=>'form-control', 'placeholder'=>'Email','size'=>50,'maxlength'=>50)); ?>
   		</div>
    		<?php echo $form->error($model,'email'); ?>
  	</div>
	<div class="clearfix"></div>

	<div class="form-group">
    	<label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Agama *</label>
    	<div class="col-sm-9">
     		<?php echo $form->textField($model,'agama',array('class'=>'form-control', 'placeholder'=>'Agama','size'=>20,'maxlength'=>20)); ?>
   		</div>
    		<?php echo $form->error($model,'agama'); ?>
  	</div>
	<div class="clearfix"></div>

  <div class="form-group">
      <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">No HP *</label>
      <div class="col-sm-9">
        <?php echo $form->textField($model,'no_hp',array('class'=>'form-control', 'placeholder'=>'Nomor Hp','size'=>15,'maxlength'=>15)); ?>
      </div>
        <?php echo $form->error($model,'no_hp'); ?>
    </div>
  <div class="clearfix"></div>

  <div class="form-group">
      <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Foto *</label>
      <div class="col-sm-9">
        <?php echo $form->textField($model,'foto',array('class'=>'form-control', 'placeholder'=>'Foto','size'=>255,'maxlength'=>255)); ?>
      </div>
        <?php echo $form->error($model,'foto'); ?>
    </div>
  <div class="clearfix"></div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->