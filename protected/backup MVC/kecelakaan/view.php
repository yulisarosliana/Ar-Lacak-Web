<?php
/* @var $this KecelakaanController */
/* @var $model Kecelakaan */

$this->breadcrumbs=array(
	'Kecelakaans'=>array('index'),
	$model->id_kecelekaan,
);

$this->menu=array(
	// array('label'=>'List Kecelakaan', 'url'=>array('index')),
	// array('label'=>'Create Kecelakaan', 'url'=>array('create')),
	// array('label'=>'Update Kecelakaan', 'url'=>array('update', 'id'=>$model->id_kecelekaan)),
	// array('label'=>'Delete Kecelakaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kecelekaan),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage Kecelakaan', 'url'=>array('admin')),
);
?>

<h2><i class="fa fa-truck"></i> Lihat Kecelakaan #<?php echo $model->id_kecelekaan; ?></h2>
<div class="x_title">
                    </div>

<div class="row">
        <div class="col-md-12">

            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

<a class="btn btn-primary" onclick="location='admin'"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<br><br>    
                <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="<?php echo Yii::app()->request->baseUrl; ?>/images/laka/<?php echo $model->foto; ?>" alt="Avatar" title="<?php echo $model->lokasi; ?>">
                                </div>
                            </div>
                            <h3><?php  ?></h3>

                            <ul class="list-unstyled user_data">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">Judul Kecelakaan</th>
                                        <td><?php echo $model->detail; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ID User Pelapor</th>
                                        <td><a target="blank" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/user/<?php echo $model->id_user ?>"><?php echo $model->id_user; ?></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </ul>

                       <a title="Lihat lokasi dari google maps" class="btn btn-success col-md-12" target="_blank" 
                                            href="<?php echo 'http://maps.google.com/maps?q='; echo $model->lat; echo ','; echo $model->lng; ?>"
                                             role="button"><i class="fa fa-map-marker"></i> Lihat dari Google maps</a>

                        <!--Telegram Share button Start-->
                                            <a title="Share ke Telegram" class="btn btn-info col-md-12" href="https://telegram.me/share/url?url=<?php echo"--ARLacakReport-- Telah terjadi kecelakaan '$model->detail' pada '$model->waktu_pelaporan' di '$model->lokasi', harap tindak lanjuti! Lokasi : "; echo 'http://maps.google.com/maps?q='; echo $model->lat; echo ','; echo $model->lng; ?>" target="_blank"><img src='<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/telegram.png ?>' style='height:22px; width:22px;'/> Share ke Telegram</a>
                                            <!--Telegram Share Button End-->

                        <!--Whatsapp Share button Start-->
                                            <a title="Share ke WhatsApp" class="btn btn-success col-md-12" href='https://web.whatsapp.com://send?text= <?php echo"--ARLacakReport-- Telah terjadi kecelakaan $model->detail pada $model->waktu_pelaporan di $model->lokasi, harap tindak lanjuti! Lokasi : https://www.google.com/maps/search/$model->lat,$model->lng"; ?>' target="_blank"><img src='<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/whatsapp.png ?>' style='height:26px; width:26px;'/> Share ke WhatsApp</a>
                                            <!--Whatsapp Share Button End-->

                                            <a onclick="return confirm('Anda yakin ingin menghapus <?php echo $model->detail;?> ?' )" title="Hapus data kecelakaan" class="btn btn-danger col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kecelakaan/delete/<?= $model->id_kecelekaan; ?>"><i class="fa fa-trash"></i> Hapus Kecelakaan</a>
                                             
                        </div>

                        <br>
                        <br>
                        <br>
                        <div class="col-md-9 col-sm-9 col-xs-15">
                            <div class="x_panel">

                                <div class="x_content">

                                    <!-- start accordion -->
                                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">ID Kecelakaan</th>
                                                        <td><?php echo $model->id_kecelekaan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">ID User Pelapor</th>
                                                        <td><a target="blank" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/user/<?php echo $model->id_user ?>"><?php echo $model->id_user; ?></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Lokasi</th>
                                                        <td><?php echo $model->lokasi; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Waktu Pelaporan</th>
                                                        <td><?php echo $model->waktu_pelaporan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Judul</th>
                                                        <td><?php echo $model->detail; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Latitude</th>
                                                        <td><?php echo $model->lat; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Longitude</th>
                                                        <td><?php echo $model->lng; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of accordion -->


                                </div>
                            </div>
                        </div>
			</div>
		</div>
</div>

<?php 
// $this->widget('zii.widgets.CDetailView', array(
// 	'data'=>$model,
// 	'attributes'=>array(
// 		'id_kecelekaan',
// 		'id_user',
// 		'lokasi',
// 		'foto',
// 		'waktu_pelaporan',
// 		'detail',
// 		'lat',
// 		'lng',
// 	),
// )); 
?>
