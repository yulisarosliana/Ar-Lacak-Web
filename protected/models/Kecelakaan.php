<?php

/**
 * This is the model class for table "tb_kecelakaan".
 *
 * The followings are the available columns in table 'tb_kecelakaan':
 * @property integer $id_kecelekaan
 * @property integer $id_user
 * @property string $lokasi
 * @property string $foto
 * @property string $waktu_pelaporan
 * @property string $detail
 * @property double $lat
 * @property double $lng
 * @property string $deskripsi
 * @property integer $id_kategori
 *
 * The followings are the available model relations:
 * @property TbKategori $idKategori
 * @property TbUser $idUser
 * @property TbNotifikasi $tbNotifikasi
 */
class Kecelakaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_kecelakaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, lokasi, foto, waktu_pelaporan, detail, lat, lng, id_kategori', 'required'),
			array('id_user, id_kategori', 'numerical', 'integerOnly'=>true),
			array('lat, lng', 'numerical'),
			array('lokasi', 'length', 'max'=>50),
			array('foto', 'length', 'max'=>255),
			array('deskripsi', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kecelekaan, id_user, lokasi, foto, waktu_pelaporan, detail, lat, lng, deskripsi, id_kategori', 'safe', 'on'=>'search'),
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
			'idKategori' => array(self::BELONGS_TO, 'TbKategori', 'id_kategori'),
			'idUser' => array(self::BELONGS_TO, 'TbUser', 'id_user'),
			'tbNotifikasi' => array(self::HAS_ONE, 'TbNotifikasi', 'id_kecelakaan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kecelekaan' => 'Id Kecelekaan',
			'id_user' => 'Id User',
			'lokasi' => 'Lokasi',
			'foto' => 'Foto',
			'waktu_pelaporan' => 'Waktu Pelaporan',
			'detail' => 'Detail',
			'lat' => 'Lat',
			'lng' => 'Lng',
			'deskripsi' => 'Deskripsi',
			'id_kategori' => 'Id Kategori',
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

		$criteria->compare('id_kecelekaan',$this->id_kecelekaan);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('lokasi',$this->lokasi,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('waktu_pelaporan',$this->waktu_pelaporan,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('lat',$this->lat);
		$criteria->compare('lng',$this->lng);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('id_kategori',$this->id_kategori,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	// ambil data per kategori
	function getData($id_kategori) {
    $sql = "SELECT tb_kecelakaan.id_kecelekaan, tb_kecelakaan.id_user, tb_kecelakaan.lokasi, tb_kecelakaan.foto, tb_kecelakaan.waktu_pelaporan, tb_kecelakaan.detail, tb_kecelakaan.lat, tb_kecelakaan.lng, tb_kecelakaan.deskripsi, tb_kecelakaan.id_kategori, tb_user.username, tb_kategori.keterangan FROM tb_kecelakaan INNER JOIN tb_user, tb_kategori WHERE tb_kecelakaan.id_kategori='$id_kategori' AND tb_kecelakaan.id_user = tb_user.id_user AND tb_kecelakaan.id_kategori = tb_kategori.id_kategori ORDER BY `tb_kecelakaan`.`waktu_pelaporan` DESC";

    $model = Yii::app()->db
        ->createCommand($sql)
        ->queryAll();
    return $model;
	}

	// ambil data keseluruhan
	function getAllData() {
    $sql = "SELECT tb_kecelakaan.id_kecelekaan, tb_kecelakaan.id_user, tb_kecelakaan.lokasi, tb_kecelakaan.foto, tb_kecelakaan.waktu_pelaporan, tb_kecelakaan.detail, tb_kecelakaan.lat, tb_kecelakaan.lng, tb_kecelakaan.deskripsi, tb_kecelakaan.id_kategori, tb_user.username, tb_kategori.keterangan FROM tb_kecelakaan INNER JOIN tb_user, tb_kategori WHERE tb_kecelakaan.id_user = tb_user.id_user AND tb_kecelakaan.id_kategori = tb_kategori.id_kategori ORDER BY `tb_kecelakaan`.`waktu_pelaporan` DESC";

    $model = Yii::app()->db
        ->createCommand($sql)
        ->queryAll();
    return $model;
	}

	function getCount($id_kategori) {
    $sql = "SELECT COUNT(id_kecelekaan) FROM tb_kecelakaan WHERE tb_kecelakaan.id_kategori='$id_kategori'";

    $model = Yii::app()->db
        ->createCommand($sql)
        ->queryAll();
    return $model;
	}

	function getCountLaka() {
    $sql = "SELECT COUNT(*) AS total FROM tb_kecelakaan WHERE tb_kecelakaan.id_kategori = '1';";

    $model = Yii::app()->db
        ->createCommand($sql)
        ->queryAll();
    return $model;
	}

	function getCountKriminal() {
    $sql = "SELECT COUNT(*) AS total FROM tb_kecelakaan WHERE tb_kecelakaan.id_kategori = '2';";

    $model = Yii::app()->db
        ->createCommand($sql)
        ->queryAll();
    return $model;
	}

	function getCountToday($id_kategori) {
		date_default_timezone_set('Asia/Jakarta');
                        $date = date("Y-m-d");
    $sql = "SELECT COUNT(id_kecelekaan) FROM tb_kecelakaan WHERE tb_kecelakaan.id_kategori='$id_kategori' AND waktu_pelaporan LIKE '$date%'";

    $model = Yii::app()->db
        ->createCommand($sql)
        ->queryAll();
    return $model;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kecelakaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
