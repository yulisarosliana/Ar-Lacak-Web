<?php

/**
 * This is the model class for table "tb_notifikasi".
 *
 * The followings are the available columns in table 'tb_notifikasi':
 * @property integer $id_kecelakaan
 * @property integer $sudah_dibaca
 *
 * The followings are the available model relations:
 * @property TbKecelakaan $idKecelakaan
 */
class Notifikasi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_notifikasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kecelakaan, sudah_dibaca', 'required'),
			array('id_kecelakaan, sudah_dibaca', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kecelakaan, sudah_dibaca', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idKecelakaan' => array(self::BELONGS_TO, 'TbKecelakaan', 'id_kecelakaan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kecelakaan' => 'Id Kecelakaan',
			'sudah_dibaca' => 'Sudah Dibaca',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_kecelakaan',$this->id_kecelakaan);
		$criteria->compare('sudah_dibaca',$this->sudah_dibaca);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Notifikasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	// ambil data notifikasi
	public function getData($id_kategori)
	{
		$sql = "SELECT  tb_notifikasi.id_kecelakaan, tb_notifikasi.sudah_dibaca, tb_kecelakaan.detail, tb_kecelakaan.lokasi, tb_kecelakaan.waktu_pelaporan, tb_kecelakaan.foto FROM tb_notifikasi INNER JOIN tb_kecelakaan WHERE tb_notifikasi.id_kecelakaan = tb_kecelakaan.id_kecelekaan AND tb_kecelakaan.id_kategori='$id_kategori' AND tb_notifikasi.sudah_dibaca = '0' ORDER BY `tb_kecelakaan`.`waktu_pelaporan` DESC";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

		// get data notif untuk kecelakaan
	public function getDataLaka()
	{
		$sql = "SELECT  tb_notifikasi.id_kecelakaan, tb_notifikasi.sudah_dibaca, tb_kecelakaan.detail, tb_kecelakaan.lokasi, tb_kecelakaan.waktu_pelaporan, tb_kecelakaan.foto FROM tb_notifikasi INNER JOIN tb_kecelakaan WHERE tb_notifikasi.id_kecelakaan = tb_kecelakaan.id_kecelekaan AND tb_kecelakaan.kategori='laka' AND tb_notifikasi.sudah_dibaca = '0' ORDER BY `tb_kecelakaan`.`waktu_pelaporan` DESC";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

		// get data notif untuk kecelakaan
	public function getDataKriminal()
	{
		$sql = "SELECT  tb_notifikasi.id_kecelakaan, tb_notifikasi.sudah_dibaca, tb_kecelakaan.detail, tb_kecelakaan.lokasi, tb_kecelakaan.waktu_pelaporan, tb_kecelakaan.foto FROM tb_notifikasi INNER JOIN tb_kecelakaan WHERE tb_notifikasi.id_kecelakaan = tb_kecelakaan.id_kecelekaan AND tb_kecelakaan.kategori='kriminal' AND tb_notifikasi.sudah_dibaca = '0' ORDER BY `tb_kecelakaan`.`waktu_pelaporan` DESC";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function klikNotif($id)
	{
		$sql = "UPDATE tb_notifikasi SET sudah_dibaca = '1' WHERE id_kecelakaan = $id";

		$model = Yii::app()->db
			->createCommand($sql)
			->execute();
		return $model;
	}

	// ambil jumlah notif berdasarkan kategori
	public function getCount($id_kategori)
	{
		$sql = "SELECT COUNT(id_kecelakaan) FROM (
    SELECT  tb_notifikasi.id_kecelakaan, tb_notifikasi.sudah_dibaca, tb_kecelakaan.detail, tb_kecelakaan.lokasi, tb_kecelakaan.waktu_pelaporan, tb_kecelakaan.foto FROM tb_notifikasi INNER JOIN tb_kecelakaan WHERE tb_notifikasi.id_kecelakaan = tb_kecelakaan.id_kecelekaan AND tb_kecelakaan.id_kategori='$id_kategori' AND tb_notifikasi.sudah_dibaca = '0' ORDER BY `tb_kecelakaan`.`waktu_pelaporan` DESC
    ) AS subquery;";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getCountKriminal()
	{
		$sql = "SELECT COUNT(id_kecelakaan) FROM (
    SELECT  tb_notifikasi.id_kecelakaan, tb_notifikasi.sudah_dibaca, tb_kecelakaan.detail, tb_kecelakaan.lokasi, tb_kecelakaan.waktu_pelaporan, tb_kecelakaan.foto FROM tb_notifikasi INNER JOIN tb_kecelakaan WHERE tb_notifikasi.id_kecelakaan = tb_kecelakaan.id_kecelekaan AND tb_kecelakaan.kategori='kriminal' AND tb_notifikasi.sudah_dibaca = '0' ORDER BY `tb_kecelakaan`.`waktu_pelaporan` DESC
    ) AS subquery;";

    	$model = Yii::app()->db->createCommand($sql)->queryAll();
    	return $model;
	}

	public function getCountLaka()
	{
		$sql = "SELECT COUNT(id_kecelakaan) FROM (
    SELECT  tb_notifikasi.id_kecelakaan, tb_notifikasi.sudah_dibaca, tb_kecelakaan.detail, tb_kecelakaan.lokasi, tb_kecelakaan.waktu_pelaporan, tb_kecelakaan.foto FROM tb_notifikasi INNER JOIN tb_kecelakaan WHERE tb_notifikasi.id_kecelakaan = tb_kecelakaan.id_kecelekaan AND tb_kecelakaan.kategori='laka' AND tb_notifikasi.sudah_dibaca = '0' ORDER BY `tb_kecelakaan`.`waktu_pelaporan` DESC
    ) AS subquery;";

    	$model = Yii::app()->db->createCommand($sql)->queryAll();
    	return $model;
	}
}
