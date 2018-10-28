<?php
/* @var $this LokasiPentingController */
/* @var $model LokasiPenting */
/* @var $form CActiveForm */
?>

<?php
// initiate
// do not delete
$baseUrl = Yii::app()->request->baseUrl;
?>

<div class="form">
    l
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'lokasi-penting-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
        //tambahan izin menyimpan data
        'htmlOptions' => array('enctype' => 'multipart/form-data', 'autocomplete' => 'off'),
    )); ?>


    <!-- Form baru -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-map-marker"></i> Lokasi Penting
                        <small><!-- different form elements --></small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>

                    <!--  -->

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <?php echo $form->errorSummary($model); ?>

                        <div class="col-md-6 col-md-offset-3">
                            <p class="note">Form dengan tanda <span class="required">*</span> wajib diisi.</p>

                            <div class="form-group">
                                <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Nama Lokasi
                                    *</label>
                                <div class="col-sm-9">
                                    <?php echo $form->textField($model, 'title', array('class' => 'form-control has-feedback-left', 'required' => 'required', 'placeholder' => 'contoh: Pos gurindam', 'size' => 30, 'maxlength' => 30)); ?>
                                    <span class="fa fa-institution form-control-feedback left"
                                          aria-hidden="true"></span>
                                </div>
                                <?php echo $form->error($model, 'title'); ?>
                            </div>
                            <div class="clearfix"></div>
                            <br>

                            <div class="form-group">
                                <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Alamat
                                    *</label>
                                <div class="col-sm-9">
                                    <?php echo $form->textArea($model, 'streetAddress', array('class' => 'form-control has-feedback-left', 'required' => 'required', 'placeholder' => 'contoh: Jl. A. Yani', 'size' => 255, 'maxlength' => 255)); ?>
                                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <?php echo $form->error($model, 'streetAddress'); ?>
                            </div>
                            <div class="clearfix"></div>
                            <br>

                            <div class="form-group">
                                <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Latitude
                                    *</label>
                                <div class="col-sm-9">
                                    <?php echo $form->textField($model, 'lat', array('class' => 'form-control has-feedback-left', 'required' => 'required', 'placeholder' => 'contoh: 1.123456789', 'size' => 50, 'maxlength' => 50)); ?>
                                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                    <div>
                                        <?php echo $form->error($model, 'lat'); ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <br>

                                <div class="form-group">
                                    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Longitude
                                        *</label>
                                    <div class="col-sm-9">
                                        <?php echo $form->textField($model, 'lng', array('class' => 'form-control has-feedback-left', 'required' => 'required', 'placeholder' => 'contoh: 0.123456', 'size' => 50, 'maxlength' => 50)); ?>
                                        <span class="fa fa-map-marker form-control-feedback left"
                                              aria-hidden="true"></span>
                                    </div>
                                    <?php echo $form->error($model, 'lng'); ?>
                                </div>
                                <div class="clearfix"></div>
                                <br>

                                <div class="form-group">
                                    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Altitude
                                        *</label>
                                    <div class="col-sm-9">
                                        <?php echo $form->numberField($model, 'altitude', array('class' => 'form-control has-feedback-left', 'required' => 'required', 'placeholder' => 'contoh: 10', 'size' => 50, 'maxlength' => 50)); ?>
                                        <span class="fa fa-map-marker form-control-feedback left"
                                              aria-hidden="true"></span>
                                    </div>
                                    <?php echo $form->error($model, 'altitude'); ?>
                                </div>
                                <div class="clearfix"></div>
                                <br>

                                <div class="form-group">
                                    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Deskripsi
                                        *</label>
                                    <div class="col-sm-9">
                                        <?php echo $form->textArea($model, 'deskripsi', array('class' => 'form-control has-feedback-left', 'required' => 'required', 'placeholder' => 'contoh: Kantor kepolisian sektor', 'size' => 255, 'maxlength' => 255)); ?>
                                        <span class="fa fa-list-alt form-control-feedback left"
                                              aria-hidden="true"></span>
                                    </div>
                                    <?php echo $form->error($model, 'deskripsi'); ?>
                                </div>
                                <div class="clearfix"></div>
                                <br>


                                <div class="form-group">
                                    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">No Telpon
                                        *</label>
                                    <div class="col-sm-9">
                                        <?php echo $form->numberField($model, 'number', array('class' => 'form-control has-feedback-left', 'required' => 'required', 'placeholder' => 'contoh: 076112345', 'size' => 20, 'maxlength' => 20)); ?>
                                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <?php echo $form->error($model, 'number'); ?>
                                </div>
                                <div class="clearfix"></div>
                                <br>

                                <div class="form-group">
                                    <label class="col-sm-3 controll-label no-padding-right" for="form-field-1">Foto
                                        *</label>
                                    <div class="col-sm-9">
                                        <?php echo $form->fileField($model, 'image', array('size' => 60, 'maxlength' => 255, 'id' => 'image', 'required' => 'required')); ?>
                                    </div>
                                    <?php echo $form->error($model, 'image'); ?>
                                </div>
                                <div class="clearfix"></div>
                                <br>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="x_title">
                        </div>


                        <div class="col-md-6 col-md-offset-4">
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan Lokasi Penting' : 'Save', array('class' => 'btn btn-primary')); ?>
                            <?php echo CHtml::Button('Batal', array('onClick' => "location='$baseUrl/index.php/lokasiPenting/admin'", 'class' => 'btn btn-default')); ?>
                        </div>

                    </form>
                    <?php
                    $this->endWidget();
                    ?>


                </div><!-- form -->