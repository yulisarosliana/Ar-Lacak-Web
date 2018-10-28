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
 *
 * The followings are the available model relations:
 * @property TbUser $idUser
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
			array('id_user, lokasi, foto, waktu_pelaporan, detail, lat, lng', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('lat, lng', 'numerical'),
			array('lokasi', 'length', 'max'=>50),
			array('foto', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kecelekaan, id_user, lokasi, foto, waktu_pelaporan, detail, lat, lng', 'safe', 'on'=>'search'),
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
			'idUser' => array(self::BELONGS_TO, 'TbUser', 'id_user'),
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

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	function getData() {
    $sql = "SELECT tb_kecelakaan.id_kecelekaan, tb_Kecelakaan.id_user, tb_kecelakaan.lokasi, tb_kecelakaan.foto, tb_kecelakaan.waktu_pelaporan, tb_kecelakaan.detail, tb_kecelakaan.lat, tb_kecelakaan.lng, tb_user.username FROM tb_kecelakaan INNER JOIN tb_user WHERE tb_kecelakaan.id_user = tb_user.id_user ORDER BY `tb_kecelakaan`.`waktu_pelaporan` DESC";

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
