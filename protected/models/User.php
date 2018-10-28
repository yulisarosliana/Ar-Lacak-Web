<?php

/**
 * This is the model class for table "tb_user".
 *
 * The followings are the available columns in table 'tb_user':
 * @property integer $id_user
 * @property string $username
 * @property string $password
 * @property string $nik
 * @property string $nama_lengkap
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $pekerjaan
 * @property string $email
 * @property string $agama
 * @property string $no_hp
 * @property string $foto
 *
 * The followings are the available model relations:
 * @property TbKecelakaan[] $tbKecelakaans
 * @property TbPengaduanSaran[] $tbPengaduanSarans
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, nik, nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, pekerjaan, email, agama, no_hp, foto', 'required'),
			array('username, nama_lengkap, email', 'length', 'max'=>50),
			array('nik, tempat_lahir, pekerjaan, agama', 'length', 'max'=>20),
			array('no_hp', 'length', 'max'=>15),
			array('jenis_kelamin', 'length', 'max'=>1),
			array('alamat, password, foto', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, username, password, nik, nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, pekerjaan, email, agama, no_hp, foto', 'safe', 'on'=>'search'),
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
			'tbKecelakaans' => array(self::HAS_MANY, 'TbKecelakaan', 'id_user'),
			'tbPengaduanSarans' => array(self::HAS_MANY, 'TbPengaduanSaran', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'username' => 'Username',
			'password' => 'Password',
			'nik' => 'Nik',
			'nama_lengkap' => 'Nama Lengkap',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'jenis_kelamin' => 'Jenis Kelamin',
			'alamat' => 'Alamat',
			'pekerjaan' => 'Pekerjaan',
			'email' => 'Email',
			'agama' => 'Agama',
			'no_hp' => 'No HP',
			'foto' => 'Foto',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nik',$this->nik,true);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('pekerjaan',$this->pekerjaan,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('no_hp',$this->no_hp,true);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getCount(){
		$sql = "SELECT COUNT(id_user) FROM tb_user";

		$model = Yii::app()->db
        ->createCommand($sql)
        ->queryAll();
    return $model;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


}
