<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Users' => array('index'),
    'Manage',
);

$this->menu = array(
    // array('label'=>'List User', 'url'=>array('index')),
    // array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!-- <h1>Manage Users</h1> -->

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php
//echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));
?>
<div class="search-form" style="display:none">
<?php
//$this->renderPartial('_search',array(
//	'model'=>$model,
//)); 
?>
</div> --><!-- search-form -->

<div class="row">
    <div class="col-md-12">

        <!-- TABLE STRIPED -->
        <!-- <div class="panel"> -->
        <div class="">
            <div class="col-md-6">
                <h3><i class="fa fa-android"></i> Pengguna Android
                    <small> LaporPak - Lacak</small>
                </h3>
            </div>
            <div class="col-md-6 text-right">
                <!--
									<i class="fa fa-plus m-right-xs"></i>
                                    <?php
                // echo CHtml::Button('Tambah Pos Polisi',array('onClick'=>"location='create'", 'class'=>'btn btn-primary'));
                ?> -->

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
                    <th>Username</th>
                    <th>Password</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Pekerjaan</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                <?php
                // print_r($model); // testing pemanggilan data
                ?>

                <?php $no = 1; ?>
                <?php foreach ($model as $data) : ?>


                    <tr>
                        <td><?php echo $no; ?></td>
                        <!-- <td><?= $data->id_user; ?></td> -->
                        <td><?= $data->username; ?></td>
                        <td><?= $data->password; ?></td>
                        <td><?= $data->nik; ?></td>
                        <td><?= $data->nama_lengkap; ?></td>
                        <td><?= $data->pekerjaan; ?></td>
                        <td>
                            <!--<div class="hidden-sm hidden-xs action-buttons">-->
                            <a class="btn btn-success btn-xs" href="<?= $data->id_user; ?>" role="button"><i
                                        class="fa fa-search"></i></a>
                            <!-- <a class="btn btn-warning btn-xs" href="update/<?= $data->id_user; ?>" role="button"><i class="fa fa-pencil"></i></a> -->
                            <a onclick="return confirm('Anda yakin ingin menghapus akun <?php echo $data->username; ?> ? Semua laporan kecelakaan dari <?php echo $data->username; ?> juga akan ikut terhapus' )"
                               title="Hapus data kecelakaan" class="btn btn-danger btn-xs"
                               href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/user/delete/<?= $data->id_user; ?>"><i
                                        class="fa fa-trash"></i></a>
                            <!--</div>-->


                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>


                </tbody>
            </table>
        </div>
        <!-- </div> -->
        <!-- END TABLE STRIPED -->

        <?php
        //  $this->widget('zii.widgets.grid.CGridView', array(
        // 	'id'=>'user-grid',
        // 	'dataProvider'=>$model->search(),
        // 	'filter'=>$model,
        // 	'columns'=>array(
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

        // 		array(
        // 			'class'=>'CButtonColumn',
        // 		),
        // 	),
        // ));
        ?>
