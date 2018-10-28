<?php
/* @var $this WebUserController */
/* @var $model WebUser */

$this->breadcrumbs=array(
	'Web Users'=>array('index'),
	$model->id_web_user,
);

$this->menu=array(
	// array('label'=>'List WebUser', 'url'=>array('index')),
	// array('label'=>'Create WebUser', 'url'=>array('create')),
	// array('label'=>'Update WebUser', 'url'=>array('update', 'id'=>$model->id_web_user)),
	// array('label'=>'Delete WebUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_web_user),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage WebUser', 'url'=>array('admin')),
);
?>

<h2><i class="fa fa-user"></i> Lihat Administrator #<?php echo $model->id_web_user; ?></h2>
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
                                        <th scope="row">ID Administrator</th>
                                        <td><?php echo $model->id_web_user; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Username</th>
                                        <td><?php echo $model->username; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </ul>

                        <a onclick="return confirm('Anda yakin ingin menghapus Administrator <?php echo $model->username;?> ?' )" title="Hapus akun Administrator" class="btn btn-danger col-md-12" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/webUser/delete/<?= $model->id_web_user; ?>"><i class="fa fa-trash"></i> Hapus Administrator <?php echo $model->username ?></a>
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
                                                        <th scope="row">ID Administrator</th>
                                                        <td><?php echo $model->id_web_user; ?></td>
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
                                                        <th scope="row">Nama Lengkap</th>
                                                        <td><?php echo $model->nama_lengkap; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">No Identitas</th>
                                                        <td><?php echo $model->no_identitas; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                        <td><?php echo $model->email; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Id Kategori</th>
                                                        <td><?php echo $model->id_kategori; ?></td>
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
// 		'id_web_user',
// 		'username',
// 		'password',
// 		'nama_lengkap',
// 		'no_identitas',
// 		'email',
// 		'id_kategori',
// 	),
// ));
 ?>
