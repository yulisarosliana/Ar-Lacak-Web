<?php

/**
 * This is the model class for table "tb_kategori".
 *
 * The followings are the available columns in table 'tb_kategori':
 * @property integer $id_kategori
 * @property string $nama
 * @property string $keterangan
 *
 * The followings are the available model relations:
 * @property TbKecelakaan[] $tbKecelakaans
 * @property TbWebUser[] $tbWebUsers
 */
class Kategori extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_kategori';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, keterangan', 'required'),
			array('nama, keterangan', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kategori, nama, keterangan', 'safe', 'on'=>'search'),
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
			'tbKecelakaans' => array(self::HAS_MANY, 'TbKecelakaan', 'id_kategori'),
			'tbWebUsers' => array(self::HAS_MANY, 'TbWebUser', 'id_kategori'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kategori' => 'Id Kategori',
			'nama' => 'Nama',
			'keterangan' => 'Keterangan',
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

		$criteria->compare('id_kategori',$this->id_kategori);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kategori the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getNamaKategori($id_kategori){
		$sql = "SELECT keterangan FROM tb_kategori WHERE id_kategori='$id_kategori'";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllNamaKategori(){
		$sql = "SELECT tb_kategori.id_kategori, tb_kategori.keterangan FROM tb_kategori WHERE id_kategori != -1";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllNamaKategoriWithRoot(){
		$sql = "SELECT tb_kategori.id_kategori, tb_kategori.keterangan FROM tb_kategori";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllIdKategori(){
		$sql = "SELECT id_kategori FROM tb_kategori";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}

	public function getAllIdKategoriExRoot(){
		$sql = "SELECT id_kategori FROM tb_kategori WHERE id_kategori != -1";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}	

	public function getLengthKategori(){
		$sql = "SELECT COUNT(*) FROM tb_kategori";

		$model = Yii::app()->db
			->createCommand($sql)
			->queryAll();
		return $model;
	}
}
