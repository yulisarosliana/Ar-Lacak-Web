<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id_user,
);

$this->menu=array(
	// array('label'=>'List User', 'url'=>array('index')),
	// array('label'=>'Create User', 'url'=>array('create')),
	// array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id_user)),
	// array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h2><i class="fa fa-android"></i> Lihat Pengguna Android #<?php echo $model->id_user; ?></h2>
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
                                    <img class="img-responsive avatar-view" src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $model->username; ?>" alt="Avatar" title="<?php ?>">
                                </div>
                            </div>
                            <h3><?php ?></h3>

                            <ul class="list-unstyled user_data">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">ID Pengguna</th>
                                        <td><?php echo $model->id_user; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Username</th>
                                        <td><?php echo $model->username; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </ul>

                        <a onclick="return confirm('Anda yakin ingin menghapus akun <?php echo $model->username;?> ? Semua laporan kecelakaan dari <?php echo $model->username; ?> juga akan ikut terhapus' )" title="Hapus data kecelakaan" class="btn btn-danger col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/user/delete/<?= $model->id_user; ?>"><i class="fa fa-trash"></i> Hapus Akun <?php echo $model->username ?></a>
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
                                                        <th scope="row">ID Pengguna</th>
                                                        <td><?php echo $model->id_user; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Username</th>
                                                        <td><?php echo $model->username; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Password</th>
                                                        <td><?php echo $model->password; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">NIK</th>
                                                        <td><?php echo $model->nik; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Nama Lengkap</th>
                                                        <td><?php echo $model->nama_lengkap; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tempat Lahir</th>
                                                        <td><?php echo $model->tempat_lahir; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tanggal Lahir</th>
                                                        <td><?php echo $model->tanggal_lahir; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Jenis Kelamin</th>
                                                        <td><?php echo $model->jenis_kelamin; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alamat</th>
                                                        <td><?php echo $model->alamat; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pekerjaan</th>
                                                        <td><?php echo $model->pekerjaan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                        <td><?php echo $model->email; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Agama</th>
                                                        <td><?php echo $model->agama; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">No HP</th>
                                                        <td><?php echo $model->no_hp; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Foto</th>
                                                        <td><?php echo $model->foto; ?></td>
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
//  $this->widget('zii.widgets.CDetailView', array(
// 	'data'=>$model,
// 	'attributes'=>array(
// 		'id_user',
// 		'username',
// 		'password',
// 		'nik',
// 		'nama_lengkap',
// 		'tempat_lahir',
// 		'tanggal_lahir',
// 		'jenis_kelamin',
// 		'alamat',
// 		'pekerjaan',
// 		'email',
// 		'agama',
// 	),
// ));
 ?>

