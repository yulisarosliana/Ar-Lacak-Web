<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
$kategori = Yii::app()->session->get('id_kategori');
?>


<!-- <p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p> -->

<head>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1H72Fojan6yCxKf5DhNXD1Er4Y60ngWU&callback=myMap"></script>

    <style>
        h1 {
            text-align: center;
        }

        html, body {
        }

        #map {
            width: 100%;
            height: 540px;
            border: 0px solid black;
        }
    </style>

    <script type="text/javascript">

        var customIcons = {

            // icon di sini di non aktifkan karna, icon di definisikan di method load() agar mengikuti kategori
            // icon: '<?php echo Yii::app()->request->baseUrl;?>/custom/production/images/markers/marker'+id_kategori+'.png',
            shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
        };

        function load() {
            var map = new google.maps.Map(document.getElementById("map"), {
                center: new google.maps.LatLng(0.498498, 101.403553),
                zoom: 11,
                mapTypeId: 'roadmap'
            });
            var infoWindow = new google.maps.InfoWindow;

            // Bagian ini digunakan untuk mendapatkan data format XML yang dibentuk dalam actionDataLokasi
            downloadUrl("<?php echo Yii::app()->request->baseUrl;?>/index.php/kecelakaan/datalokasi", function (data) {
                var xml = data.responseXML;
                var markers = xml.documentElement.getElementsByTagName("marker");
                for (var i = 0; i < markers.length; i++) {

                    var name = markers[i].getAttribute("judul");
                    var lokasi = markers[i].getAttribute("lokasi");
                    var id = markers[i].getAttribute("id");
                    var tanggal = markers[i].getAttribute("tanggal");
                    var id_kategori = markers[i].getAttribute("id_kategori");
                    var ket_kategori = markers[i].getAttribute("ket_kategori");

                    //#429ADB biru

                    var point = new google.maps.LatLng(
                        parseFloat(markers[i].getAttribute("latitude")),
                        parseFloat(markers[i].getAttribute("langitude")));
                    var html = "<a target='blank' href='kecelakaan/" + id + "'><b>" + ket_kategori + " #" + id + "</b><br/><br/><b>" + name + "</b><br/><div align='left'>" + lokasi + "<br/>" + tanggal + " </a></div>";
                    var icon = customIcons;
                    var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        icon: '<?php echo Yii::app()->request->baseUrl;?>/custom/production/images/markers/marker' + id_kategori + '.png',
                        shadow: customIcons.shadow
                    });
                    bindInfoWindow(marker, map, infoWindow, html);
                }
            });
        }

        function bindInfoWindow(marker, map, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function () {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
            });
        }

        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function () {
                if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

        function doNothing() {
        }

    </script>

</head>

<body onload="load()">
<h1>Selamat datang di FIRST AID AR </i></h1>


<div class="x_title">

</div>
<div class="x_title">

    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/user/admin">
                <span class="count_top"><i class="fa fa-user"></i> Total Pengguna</span>
                <div class="count green"><?php foreach ($model as $data) : {
                        echo $data['COUNT(id_user)'];
                    }

                        ?>
                    <?php endforeach ?>
                </div>
            </a>
        </div>

        <!-- Panel jumlah Laporan hari ini per kategori dinamis -->
        <?php
        foreach ($modelLengthKategori as $data) : {
        }
        endforeach;

        foreach ($modelgetAllNamaKategori as $data) : {
            ?>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-list-alt"></i>Lap. <?php echo $data['keterangan']; ?>
                    Hari Ini</span>
                <div class="count red">
                    <!-- print data -->
                    <?php
                    $modelgetCountToday = Kecelakaan::model()->getCountToday($data['id_kategori']);

                    foreach ($modelgetCountToday as $data2) : {
                        echo($data2['COUNT(id_kecelekaan)']);
                    }
                    endforeach;
                    ?>
                    <!-- end of print data -->
                </div>
            </div>
            <?php
        }
        endforeach;
        ?>
        <!-- End of panel jumlah Laporan hari ini -->

        <!-- Panel jumlah Laporan Total per kategori dinamis -->
        <?php
        foreach ($modelLengthKategori as $data) : {
        }
        endforeach;

        foreach ($modelgetAllNamaKategori as $data) : {
            ?>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-list-alt"></i>Total <?php echo $data['keterangan']; ?> </span>
                <div class="count purple">
                    <!-- print data -->
                    <?php
                    $modelgetCount = Kecelakaan::model()->getCount($data['id_kategori']);

                    foreach ($modelgetCount as $data2) : {
                        echo($data2['COUNT(id_kecelekaan)']);
                    }
                    endforeach;
                    ?>
                    <!-- end of print data -->
                </div>
            </div>
            <?php
        }
        endforeach;
        ?>
        <!--  End of panel jumlah laporan total-->

        <!-- /top tiles -->
    </div>

    <!-- page content -->
    <div class="" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
            <!-- <div class="col-md-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Jumlah Pengguna Aplikasi</span>
              <div class="count green">2500</div>

            </div>
            <div class="col-md-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Jumlah Laporan Kecelakaan</span>
              <div class="count red">123.50</div>
              
            </div> -->
            <!-- /top tiles -->

            <div class="clearfix"></div>

            <center>

            </center>
            <div id="map"></div>
            <br>


            <div class="clearfix"></div>


</body>

</html>
