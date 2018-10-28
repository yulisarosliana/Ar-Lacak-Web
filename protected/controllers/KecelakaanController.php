<?php

class KecelakaanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
//			'postOnly + delete', // we only allow deletion via POST request
		);
	}

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
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		// Bila kecelakaan detail dibuka, otomatis notifikasi hilang

		Notifikasi::model()->klikNotif($id);
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Kecelakaan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kecelakaan']))
		{
			$model->attributes=$_POST['Kecelakaan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_kecelekaan));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kecelakaan']))
		{
			$model->attributes=$_POST['Kecelakaan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_kecelekaan));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		// $dataProvider=new CActiveDataProvider('Kecelakaan');
		// $this->render('index',array(
		// 	'dataProvider'=>$dataProvider,
		// ));

		// direct to admin page
		$this->redirect("admin");
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{

		$kategori =Yii::app()->session->get('id_kategori');
		

		// $db=new Kecelakaan('search');
		// $db->unsetAttributes();  // clear any default values
		// if(isset($_GET['Kecelakaan']))
		// 	$db->attributes=$_GET['Kecelakaan'];

		// $model = Kecelakaan::model()->findAll();

		// jika root
		if ($kategori>0) {
			// ambil data laporan per kategori
		$model = Kecelakaan::model()->getData($kategori);
		} else if($kategori=-1){
			$model = Kecelakaan::model()->getAllData();
		} else {
			echo "kategori akun anda tidak dapat ditemukan";
		}

		$this->render('admin',array(
			'model'=>$model,
		//	'db'=>$db,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Kecelakaan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Kecelakaan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Kecelakaan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kecelakaan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionCetak()
	{
		$this->layout='mainxml';			
	}

	public function actionDataLokasi()
	{

		$this->layout='mainxml';
			 // Parsing Karakter-Karakter Khusus
			 function parseToXML($htmlStr)
			 {
				  $xmlStr=str_replace('<','<',$htmlStr);
				  $xmlStr=str_replace('>','>',$xmlStr);
				  $xmlStr=str_replace('"','"',$xmlStr);
				  $xmlStr=str_replace("'","'",$xmlStr);
				  $xmlStr=str_replace("&",'&',$xmlStr);
				  return $xmlStr;
			 }
		 
		 	 $kategori =Yii::app()->session->get('id_kategori');
			
			 // Memilih semua baris pada tabel 'table '
			 // kondisi get data laporan beda kategori
		
			// jika root
			if ($kategori>0) {
				// ambil data laporan per kategori
				$model = Kecelakaan::model()->getData($kategori);
			} else if($kategori=-1){
				$model = Kecelakaan::model()->getAllData();
			} else {
				echo "kategori akun anda tidak dapat ditemukan";
			}
		 
			 // Header File XML
			 header("Content-type: text/xml");
		 
			 // Parent node XML
			 echo '<markers>';
		 
			 // Iterasi baris, masing-masing menghasilkan node-node XML
			foreach($model as $db)
			{
				  // Menambahkan ke node dokumen XML
				  echo '<marker ';
				  echo 'judul="' . parseToXML($db['detail']) . '" ';
				  echo 'lokasi="' . parseToXML($db['lokasi']) . '" ';
				  echo 'latitude="' . $db['lat'] . '" ';
				  echo 'langitude="' . $db['lng'] . '" ';
				  echo 'id="' . $db['id_kecelekaan'] . '" ';
				  
				  $date = date_create($db['waktu_pelaporan']); 
				  $tanggal_readable = date_format($date, 'j F Y, \p\u\k\u\l G:i');

				  echo 'tanggal="' . $tanggal_readable . '" ';
				  echo 'deskripsi="' . $db['deskripsi'] . '" ';
				  echo 'id_kategori="' . $db['id_kategori'] . '" ';
				  echo 'ket_kategori="' . $db['keterangan'] . '" ';
				 
				  echo '/>';
			 }
		 
			 // Akhir File XML (tag penutup node)
			 echo '</markers>';

	}



}
