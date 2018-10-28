<?php

class WebUserController extends Controller
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
				'actions'=>array('create'),
				'users'=>array('*'),
				//'expression'=>'Yii:app()->user->isAdmin',
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','create','update','view'),
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
		$id_session =Yii::app()->session->get('id'); // id web user
		$kategori =Yii::app()->session->get('id_kategori'); // id kategori user

		// jika bukan root tendang keluar
		if ($kategori!=-1 && $id_session!=$id) {
			$this->redirect(Yii::app()->request->baseUrl. '/index.php/home');
		} else if($kategori==-1 || $id_session==$id){


		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	} else {
			echo "kategori akun anda tidak dapat ditemukan";
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{

		$kategori =Yii::app()->session->get('id_kategori');

		// jika bukan root tendang keluar
		if ($kategori>0) {
			$this->redirect(Yii::app()->request->baseUrl. '/index.php/home');
		} else if($kategori=-1){
		$model=new WebUser;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['WebUser']))
		{
			$model->attributes=$_POST['WebUser'];

			$acak=$model->generateSalt();
			$model->password=$model->hashPassword($_POST['WebUser']['password'],$acak);
			

			if($model->save())
				$this->redirect(array('view','id'=>$model->id_web_user));
		}

		
		$this->render('create',array(
			'model'=>$model,
			
		));

		} else {
			echo "kategori akun anda tidak dapat ditemukan";
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$id_session =Yii::app()->session->get('id'); // id web user
		$kategori =Yii::app()->session->get('id_kategori'); // id kategori user

		// jika bukan root tendang keluar
		if ($kategori!=-1 && $id_session!=$id) {
			$this->redirect(Yii::app()->request->baseUrl. '/index.php/home');
		} else if($kategori==-1 || $id_session==$id){

		$model=$this->loadModel($id);



		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['WebUser']))
		{
			$model->attributes=$_POST['WebUser'];

			$acak=$model->generateSalt();
			$model->password=$model->hashPassword($_POST['WebUser']['password'],$acak);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_web_user));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	} else {
			echo "kategori akun anda tidak dapat ditemukan";
		}
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
		// $dataProvider=new CActiveDataProvider('WebUser');
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

		// jika bukan root tendang keluar
		if ($kategori>0) {
			$this->redirect(Yii::app()->request->baseUrl. '/index.php/home');
		} else if($kategori=-1){
		// $db=new WebUser('search');
		// $db->unsetAttributes();  // clear any default values
		// if(isset($_GET['WebUser']))
		// 	$db->attributes=$_GET['WebUser'];

		// $model = WebUser::model()->findAll();

		$model = WebUser::model()->getAllData();
		


		$this->render('admin',array(
			'model'=>$model,
			
			// 'db'=>$db,
		));


		} else {
			echo "kategori akun anda tidak dapat ditemukan";
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return WebUser the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=WebUser::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param WebUser $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='web-user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
