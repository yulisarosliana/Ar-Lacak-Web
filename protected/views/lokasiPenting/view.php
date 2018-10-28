<?php
/* @var $this LokasiPentingController */
/* @var $model LokasiPenting */

$this->breadcrumbs=array(
	'Lokasi Pentings'=>array('index'),
	$model->title,
);

$this->menu=array(
	// array('label'=>'List LokasiPenting', 'url'=>array('index')),
	// array('label'=>'Create LokasiPenting', 'url'=>array('create')),
	// array('label'=>'Update LokasiPenting', 'url'=>array('update', 'id'=>$model->id)),
	// array('label'=>'Delete LokasiPenting', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage LokasiPenting', 'url'=>array('admin')),
);
?>

<h2><i class="fa fa-map-marker"></i> Lihat Pos Polisi #<?php echo $model->id; ?></h2>
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
                                    <img class="img-responsive avatar-view" src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $model->image; ?>" alt="Avatar" title="<?php ?>">
                                </div>
                            </div>
                            <h3><?php  ?></h3>

                            <ul class="list-unstyled user_data">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">ID Lokasi</th>
                                        <td><?php echo $model->id; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama</th>
                                        <td><?php echo $model->title; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </ul>

                        <a class="btn btn-warning col-md-12" data-toggle="modal" onClick="location='update/<?= $model->id; ?>'"><i class="fa fa-edit m-right-xs"></i> Edit <?php echo $model->title ?></a>

                        <a class="btn btn-success col-md-12" target="_blank" onClick="window.open('<?php echo "http://maps.google.com/maps?q=$model->lat,$model->lng"; ?>')" role="button"><i class="fa fa-map-marker"></i> Lihat dari Google maps</a>

                        <a class="btn btn-danger col-md-12" href="delete/<?= $model->id; ?>" role="button"  onclick="return confirm('Anda yakin ingin ingin menghapus <?php echo $model->title;?> ?')"><i class="fa fa-trash"></i> Hapus <?php echo $model->title ?></a>
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
                                                        <th scope="row">ID Lokasi</th>
                                                        <td><?php echo $model->id; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Nama</th>
                                                        <td><?php echo $model->title; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alamat</th>
                                                        <td><?php echo $model->streetAddress; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Latitude</th>
                                                        <td><?php echo $model->lat; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Longitude</th>
                                                        <td><?php echo $model->lng; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Altitude</th>
                                                        <td><?php echo $model->altitude; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Deskripsi</th>
                                                        <td><?php echo $model->deskripsi; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">No Telpon</th>
                                                        <td><?php echo $model->number; ?></td>
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
// 		'id',
// 		'title',
// 		'streetAddress',
// 		'lat',
// 		'lng',
// 		'altitude',
// 		'deskripsi',
// 		'number',
// 		'image',
// 	),
// ));
 ?>
