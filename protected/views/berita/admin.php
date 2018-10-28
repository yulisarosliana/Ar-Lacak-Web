<?php
/* @var $this BeritaController */
/* @var $model Berita */

$this->breadcrumbs = array(
    'Beritas' => array('index'),
    'Manage',
);

$this->menu = array(
    // array('label'=>'List Berita', 'url'=>array('index')),
    // array('label'=>'Create Berita', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#berita-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!-- <h1>Manage Beritas</h1> -->
<!-- 
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
 -->
<?php
// echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));
?>
<!-- <div class="search-form" style="display:none"> -->
<?php
// $this->renderPartial('_search',array(
// 	'model'=>$model,
// ));
?>
</div><!-- search-form -->

<div class="row">
    <div class="col-md-12">

        <!-- TABLE STRIPED -->
        <!-- <div class="panel"> -->
        <div class="">
            <div class="col-md-6">
                <h3><i class="fa fa-pencil-square-o"></i> Berita Terbaru
                    <small> FIRST AID AR</small>
                </h3>
            </div>
            <div class="col-md-6 text-right">

            </div>


        </div>
        <div class="panel-body">
            <div class="x_title">
                <br>
                <br>
            </div>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <!-- <th>#</th> -->
                    <!-- <th>ID</th> -->
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Isi</th>
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
                        <!-- <td><?php echo $no; ?></td> -->
                        <!-- <td><?= $data->id; ?></td> -->
                        <td><?= $data->judul; ?></td>
                        <td><?= $data->tanggal; ?></td>
                        <td><img class="img-responsive avatar-view" height="100" width="100"
                                 src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $data->gambar; ?>"
                        </td>
                        <td><?= $data->isi; ?></td>
                        <td>
                            <!--<div class="hidden-sm hidden-xs action-buttons">-->
                            <!-- <a class="btn btn-info btn-xs" href="<?= $data->id; ?>" role="button"><i class="fa fa-search"></i></a> -->
                            <a class="btn btn-warning btn-xs" href="update/<?= $data->id; ?>" role="button"><i
                                        class="fa fa-pencil"></i> Edit Berita</a>
                            <!-- <a class="btn btn-danger btn-xs" href="delete/<?= $data->id ?>"><i class="fa fa-trash"></i></a> -->
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
        // 	'id'=>'berita-grid',
        // 	'dataProvider'=>$model->search(),
        // 	'filter'=>$model,
        // 	'columns'=>array(
        // 		'id',
        // 		'judul',
        // 		'tanggal',
        // 		'isi',
        // 		'gambar',
        // 		array(
        // 			'class'=>'CButtonColumn',
        // 		),
        // 	),
        // ));
        ?>
