<?php
/* @var $this WebUserController */
/* @var $model WebUser */

$this->breadcrumbs=array(
	'Web Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	// array('label'=>'List WebUser', 'url'=>array('index')),
	// array('label'=>'Create WebUser', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#web-user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!-- <h1>Manage Web Users</h1> -->

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php// echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php
 // $this->renderPartial('_search',array(
	// 'model'=>$model,
//));
 ?>
</div> --><!-- search-form -->

<div class="row">
		<div class="col-md-12">

			<!-- TABLE STRIPED -->
			<!-- <div class="panel"> -->
				<div class="">
					<div class="col-md-6">
					<h3><i class="fa fa-user"></i> Administrator <small> AR - Lacak </small></h3>
				</div>
					<div class="col-md-6 text-right">

									<i class="fa fa-plus m-right-xs"></i>
                                    <?php echo CHtml::Button('Tambah Akun Administrator',array('onClick'=>"location='create'", 'class'=>'btn btn-primary')); ?>

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
								<th>Nama Lengkap</th>
								<th>No Identitas</th>
								<th>Email</th>
								<th>Kategori Akun</th>
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
										<td><?php echo $no;?></td>
										<!-- <td><?= $data['id_web_user']; ?></td> -->
										<td><?= $data['username']; ?></td>
										<td><?= $data['password']; ?></td>
										<td><?= $data['nama_lengkap']; ?></td>
										<td><?= $data['no_identitas']; ?></td>
										<td><?= $data['email']; ?></td>
										<td><?= $data['keterangan']; ?></td>
										<td>
										<!--<div class="hidden-sm hidden-xs action-buttons">-->
											<a class="btn btn-success btn-xs" href="<?= $data['id_web_user']; ?>" role="button"><i class="fa fa-search"></i></a>
											<a class="btn btn-warning btn-xs" href="update/<?= $data['id_web_user']; ?>" role="button"><i class="fa fa-pencil"></i></a>
											<a class="btn btn-danger btn-xs" href="delete/<?= $data['id_web_user']; ?>" role="button"  onclick="return confirm('Anda yakin ingin menghapus Administrator <?php echo $data['username'];?> ?')"><i class="fa fa-trash"></i></a>
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
// $this->widget('zii.widgets.grid.CGridView', array(
// 	'id'=>'web-user-grid',
// 	'dataProvider'=>$model->search(),
// 	'filter'=>$model,
// 	'columns'=>array(
// 		'id_web_user',
// 		'username',
// 		'password',
// 		'nama_lengkap',
// 		'no_identitas',
// 		'email',
// 		/*
// 		'id_kategori',
// 		*/
// 		array(
// 			'class'=>'CButtonColumn',
// 		),
// 	),
// ));
 ?>
