<?php


class HomeController extends Controller
{
	public $layout='//layouts/column2';

/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
				//'expression'=>'Yii:app()->user->isAdmin',
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','update','admin','delete', 'datalokasi'),
				'users'=>array('@'),
				// expession masih error
				//'expression'=>'Yii:app()->user->isAdmin',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$kategori =Yii::app()->session->get('id_kategori');

		$model = User::model()->getCount();
		$modelCountLaka = Kecelakaan::model()->getCountLaka();
		$modelCountKriminal = Kecelakaan::model()->getCountKriminal();
		$modelCount = Kecelakaan::model()->getCount($kategori);

		
		$modelLengthKategori = Kategori::model()->getLengthKategori();
		$modelgetAllNamaKategori = Kategori::model()->getAllNamaKategori();
		
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'

		if ($kategori==0){
			$this->redirect(Yii::app()->homeUrl);
		} else if ($kategori!=0){
			$this->render('index',array(
			'model'=>$model,
			'modelCountLaka'=>$modelCountLaka,
			'modelCountKriminal'=>$modelCountKriminal,
			'modelCount'=>$modelCount,
			'modelLengthKategori'=>$modelLengthKategori,
			'modelgetAllNamaKategori'=>$modelgetAllNamaKategori,
		


		//	'db'=>$db,
		));
		}

	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		// $model=new LoginForm;

		// // if it is ajax validation request
		// if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		// {
		// 	echo CActiveForm::validate($model);
		// 	Yii::app()->end();
		// }

		// // collect user input data
		// if(isset($_POST['LoginForm']))
		// {
		// 	$model->attributes=$_POST['LoginForm'];
		// 	// validate user input and redirect to the previous page if valid
		// 	if($model->validate() && $model->login())
		// 		$this->redirect(Yii::app()->user->returnUrl);
		// }
		// // display the login form
		// $this->render('login',array('model'=>$model));
	}
	
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionHelp()
	{
		$kategori =Yii::app()->session->get('id_kategori');

		if ($kategori==0){
			$this->redirect(Yii::app()->homeUrl);
		} else if ($kategori!=0){
			
		
		// $this->layout='help';
		$this->render('help');

	}
	}


	// public function actionKlik($id){
	// 	$model = Notifikasi::model()->klikNotif($id);
	// 	$this->redirect(Yii::app()->homeUrl);
	// }

	public function actionCetak()
	{

		$kategori =Yii::app()->session->get('id_kategori');

		if ($kategori==0){
			$this->redirect(Yii::app()->homeUrl);
		} else if ($kategori!=0){
		
		require_once Yii::app()->basePath . '/extensions/pdf/fpdf.php';
		// jika root
		if ($kategori>0) {
			// ambil data laporan per kategori
		$model = Kecelakaan::model()->getData($kategori);
		} else if($kategori=-1){
			$model = Kecelakaan::model()->getAllData();
		} else {
			echo "kategori akun anda tidak dapat ditemukan";
		}

		$judulLaporan = Kategori::model()->getNamaKategori($kategori);
		foreach ($judulLaporan as $data) : {
			$judul = $data['keterangan'];                  
		}endforeach;

		 $pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(1.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
//$pdf->Image(Yii::app()->basePath . '/extensions/pdf/logo/i3.png');
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'Laporan FIRSTAID Lalu Lintas',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : (0761) 562223',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Jl. Subrantas Km. 15, Pekanbaru, 28293',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : https://uin-suska.ac.id/ email : humas@uin-suska.ac.id',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Rekap Data $judul",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Judul', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Pelapor', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Lokasi', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Waktu Pelaporan', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Latitude', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Longitude', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;

		 foreach ($model as $data) {
		 	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $data['detail'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $data['username'], 1, 0,'C');
	$pdf->Cell(6, 0.8, $data['lokasi'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $data['waktu_pelaporan'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $data['lat'], 1, 0,'C');
	$pdf->Cell(4.5, 0.8, $data['lng'],1, 1, 'C');

	$no++;
	
	}

	$pdf->Output("laporan_surat.pdf","I");

	}
}
}