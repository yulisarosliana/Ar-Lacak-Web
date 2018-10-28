<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<div class="login__form"> 
<h1>Error <?php echo $code; ?></h1>

<div class="error">
<?php echo CHtml::encode($message); ?>
<br>
<br>
<a style="color:white;" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/home">Kembali ke Halaman Utama</a>
</div>

</div>