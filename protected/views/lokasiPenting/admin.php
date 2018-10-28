<?php
/* @var $this LokasiPentingController */
/* @var $model LokasiPenting */

$this->breadcrumbs = array(
    'Lokasi Pentings' => array('index'),
    'Manage',
);

$this->menu = array(
    // array('label'=>'List LokasiPenting', 'url'=>array('index')),
    // array('label'=>'Create LokasiPenting', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lokasi-penting-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<!-- <h2>Manage Lokasi Pentings</h2> -->

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php
//echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));
?>
<div class="search-form" style="display:none">
<?php
// $this->renderPartial('_search',array(
// 	'model'=>$model,
//)); 
?>
</div><!-- search-form -->


<div class="row">
    <div class="col-md-12">

        <!-- TABLE STRIPED -->
        <!-- <div class="panel"> -->
        <div class="">
            <div class="col-md-6">
                <h3><i class="fa fa-map-marker"></i> Lokasi Penting
                    <small> FIRST AID AR</small>
                </h3>
            </div>
            <div class="col-md-6 text-right">

                <i class="fa fa-plus m-right-xs"></i>
                <?php echo CHtml::Button('Tambah Lokasi Penting', array('onClick' => "location='create'", 'class' => 'btn btn-primary')); ?>

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
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Lat</th>
                    <th>Lng</th>
                    <th>Altitude</th>
                    <th>Deskripsi</th>
                    <th>No Telp</th>
                    <th>Foto</th>
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
                        <!-- <td><?= $data->id; ?></td> -->
                        <td><?= $data->title; ?></td>
                        <td><?= $data->streetAddress; ?></td>
                        <td><?= $data->lat; ?></td>
                        <td><?= $data->lng; ?></td>
                        <td><?= $data->altitude; ?></td>
                        <td><?= $data->deskripsi; ?></td>
                        <td><?= $data->number; ?></td>
                        <td><img class="img-responsive avatar-view"
                                 src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $data->image; ?>"
                        </td>
                        <td>
                            <!--<div class="hidden-sm hidden-xs action-buttons">-->
                            <a class="btn btn-success btn-xs" target="_blank"
                               onClick="window.open('<?php echo "http://maps.google.com/maps?q=$data->lat,$data->lng"; ?>')"
                               role="button"><i class="fa fa-map-marker"></i> Google maps</a>
                            <a class="btn btn-info btn-xs" onClick="location='<?= $data->id; ?>'" role="button"><i
                                        class="fa fa-search"></i></a>
                            <a class="btn btn-warning btn-xs" onClick="location='update/<?= $data->id; ?>'"
                               role="button"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger btn-xs" href="delete/<?= $data->id; ?>" role="button"
                               onclick="return confirm('Anda yakin ingin menghapus <?php echo $data->title; ?> ?')"><i
                                        class="fa fa-trash"></i></a>
                            <!--Telegram Share button Start-->
                            <!-- <a title="Share ke Telegram" href="https://telegram.me/share/url?url=http://maps.google.com/maps?q=<?php
                            //echo $data->lat; echo ','; echo $data->lng;
                            ?>" target="_blank"><img src='<?php
                            // echo Yii::app()->request->baseUrl;
                            ?>/custom/production/images/telegram.png ?>' style='height:22px; width:22px;'/> </a> -->
                            <!--Telegram Share Button End-->
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
        // 	'id'=>'lokasi-penting-grid',
        // 	'dataProvider'=>$model->search(),
        // 	'filter'=>$model,
        // 	'columns'=>array(
        // 		'id_lokasi_penting',
        // 		'nama',
        // 		'alamat',
        // 		'lat',
        // 		'lng',
        // 		'altitude',
        // 		/*
        // 		'deskripsi',
        // 		'no_telp',
        // 		'foto',
        // 		*/
        // 		array(
        // 			'class'=>'CButtonColumn',
        // 		),
        // 	),
        // ));
        ?>
