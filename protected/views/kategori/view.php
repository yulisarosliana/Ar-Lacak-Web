<?php
/* @var $this KategoriController */
/* @var $model Kategori */

$this->breadcrumbs=array(
	'Kategoris'=>array('index'),
	$model->id_kategori,
);

$this->menu=array(
	// array('label'=>'List Kategori', 'url'=>array('index')),
	// array('label'=>'Create Kategori', 'url'=>array('create')),
	// array('label'=>'Update Kategori', 'url'=>array('update', 'id'=>$model->id_kategori)),
	// array('label'=>'Delete Kategori', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kategori),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage Kategori', 'url'=>array('admin')),
);
?>
<h2><i class="fa fa-user"></i> Lihat Kategori #<?php echo $model->id_kategori; ?></h2>
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
                                    <img class="img-responsive avatar-view" src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $model->nama; ?>" alt="Avatar" title="<?php ?>">
                                </div>
                            </div>
                            <h3><?php ?></h3>

                            <ul class="list-unstyled user_data">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">ID Kategori</th>
                                        <td><?php echo $model->id_kategori; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Kategori</th>
                                        <td><?php echo $model->nama; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </ul>

                        <a onclick="return confirm('Anda yakin ingin menghapus Kategori <?php echo $model->keterangan;?> ? Semua akun Administrator <?php echo $model->keterangan;?> dan Laporan <?php echo $model->keterangan;?> juga ikut terhapus' )" title="Hapus akun Administrator" class="btn btn-danger col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kategori/delete/<?= $model->id_kategori; ?>"><i class="fa fa-trash"></i> Hapus Keterangan <?php echo $model->keterangan ?></a>
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
                                                        <th scope="row">ID Kategori</th>
                                                        <td><?php echo $model->id_kategori; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Nama Kategori</th>
                                                        <td><?php echo $model->nama; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Keterangan Kategori</th>
                                                        <td><?php echo $model->keterangan; ?></td>
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
// 		'id_kategori',
// 		'nama',
// 		'keterangan',
// 	),
// ));
 ?>
