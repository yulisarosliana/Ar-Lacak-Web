<?php
/* @var $this KecelakaanController */
/* @var $model Kecelakaan */

$this->breadcrumbs=array(
	'Kecelakaans'=>array('index'),
	'Manage',
);

$this->menu=array(
	// array('label'=>'List Kecelakaan', 'url'=>array('index')),
	// array('label'=>'Create Kecelakaan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search',	 "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kecelakaan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!-- <h1>Kecelakaans</h1> -->
</div><!-- search-form -->


	<div class="row">
		<div class="col-md-12">

			<!-- TABLE STRIPED -->
			<!-- <div class="panel"> -->
				<div class="">
					<div class="col-md-12">
					<h3>
						<i class="fa fa-truck"></i> Kecelakaan <small> AR - Lacak </small> 
						<a title="Cetak laporan kecelakaan" style="margin-bottom:10px" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/home/cetak" target="_blank" class="btn btn-primary pull-right col-md-2"><span class='glyphicon glyphicon-print'></span> <i class='fa fa-file-pdf-o'></i>  Cetak Laporan</a>

					</h3>

				</div>
					<div class="col-md-6 text-right">

									
                            </div>

					
					
				</div>
				<div class="panel-body">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<br>
						<div class="x_title">
							<br>
					</div>

						<thead>
							<tr>
								<th>#</th>
								<!-- <th>ID</th> -->
								<th>Judul</th>
								<th>Pelapor</th>
								<th>Lokasi</th>
								<th>Waktu</th>
								<th>Foto</th>
								<!-- <th>Lat</th>
								<th>Lng</th> -->
								<th>Share</th>
								<th></th>
							</tr>
							</thead>
							<tbody>

									<?php
										// print_r($model); // testing pemanggilan data
									?>
										<?php $no = 1; ?>
								<?php foreach ($model as $data) : ?>

									<?php $lat = $data['lat']; $lng = $data['lng']; $waktu_pelaporan = $data['waktu_pelaporan']; $judul=$data['detail']; $lokasi=$data['lokasi']; $url= "http://maps.google.com/maps?q=$lat,lng";?>

									<tr>
										<td><?php echo $no;?></td>
										<!-- <td><?= $data['id_kecelekaan']; ?></td> -->
										<td><?= $data['detail']; ?></td>
										<td><a target="blank" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/user/<?php echo $data['id_user']; ?>"><?= $data['username']; ?> </a></td>
										<td><?= $data['lokasi']; ?></td>
										<td><?= $data['waktu_pelaporan']; ?></td>
										<td><img class="img-responsive avatar-view" height="100" width="100" src="<?php echo Yii::app()->request->baseUrl; ?>/images/laka/<?php echo $data['foto']; ?>"</td>
										
										<!-- <td><?= $data['lat']; ?></td>
										<td><?= $data['lng']; ?></td> -->
										
										<td>

											<!--Telegram Share button Start-->
											<a title="Share ke Telegram" href="https://telegram.me/share/url?url=<?php echo"--ARLacakReport-- Telah terjadi kecelakaan '$judul' pada '$waktu_pelaporan' di '$lokasi', harap tindak lanjuti! Lokasi : "; echo 'http://maps.google.com/maps?q='; echo $lat; echo ','; echo $lng; ?>" target="_blank"><img src='<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/telegram.png ?>' style='height:22px; width:22px;'/> </a>
											<!--Telegram Share Button End-->

											<!--Whatsapp Share button Start-->
											<a title="Share ke WhatsApp" href='https://web.whatsapp.com://send?text= <?php echo"--ARLacakReport-- Telah terjadi kecelakaan $judul pada $waktu_pelaporan di $lokasi, harap tindak lanjuti! Lokasi : https://www.google.com/maps/search/$lat,$lng"; ?>' target="_blank"><img src='<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/whatsapp.png ?>' style='height:26px; width:26px;'/> </a>
											<!--Whatsapp Share Button End-->
											</div>
											
											
											</td>

										<td>



										<div class="hidden-sm hidden-xs action-buttons">
											<a title="Lihat lokasi dari google maps" class="btn btn-success btn-xs" target="_blank" 
											href="<?php echo 'http://maps.google.com/maps?q='; echo $lat; echo ','; echo $lng; ?>"
											 role="button"><i class="fa fa-map-marker"></i> Google maps</a>
											 <div class="clearfix"></div>
											<a title="Lihat detail kecelakaan" class="btn btn-info btn-xs" onClick="location='<?= $data['id_kecelekaan']; ?>'" role="button"><i class="fa fa-search"></i></a>
											<!-- <a title="Update data kecelakaan" class="btn btn-warning btn-xs" href="/update/<?= $data['id_kecelekaan']; ?>" role="button"><i class="fa fa-pencil"></i></a> -->
											
											<a onclick="return confirm('Anda yakin ingin menghapus <?php echo $data['detail'];?> ?' )" title="Hapus data kecelakaan" class="btn btn-danger btn-xs" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kecelakaan/delete/<?= $data['id_kecelekaan']; ?>"><i class="fa fa-trash"></i></a>
											</td>
											
										
									</tr>
									<?php $no++; ?>
								<?php endforeach; ?>



							</tbody>
						</table>
					</div>
				<!-- </div> -->
				<!-- END TABLE STRIPED -->

<?php // Show Data with default yii
// $this->widget('zii.widgets.grid.CGridView', array(
// 	'id'=>'kecelakaan-grid',
// 	'dataProvider'=>$db->search(),
// 	'filter'=>$db,
// 	'columns'=>array(
// 		'id_kecelekaan',
// 		'id_user',
// 		'lokasi',
// 		'foto',
// 		'waktu_pelaporan',
// 		'detail',
		
// 		'lat',
// 		'lng',
		
// 		array(
// 			'class'=>'CButtonColumn',
// 		),
// 	),
// )); 
?>
