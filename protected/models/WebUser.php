<?php

/**
 * This is the model class for table "tb_web_user".
 *
 * The followings are the available columns in table 'tb_web_user':
 * @property integer $id_web_user
 * @property string $username
 * @property string $password
 * @property string $nama_lengkap
 * @property string $no_identitas
 * @property string $email
 * @property integer $id_kategori
 *
 * The followings are the available model relations:
 * @property TbKategori $idKategori
 */
class WebUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_web_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, nama_lengkap, no_identitas, email, id_kategori', 'required'),
			array('id_kategori', 'numerical', 'integerOnly'=>true),
			array('username, nama_lengkap, email', 'length', 'max'=>50),
			array('password', 'length', 'max'=>255),
			array('no_identitas', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_web_user, username, password, nama_lengkap, no_identitas, email, id_kategori', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_web_user' => 'Id Web User',
			'username' => 'Username',
			'password' => 'Password',
			'nama_lengkap' => 'Nama Lengkap',
			'no_identitas' => 'No Identitas',
			'email' => 'Email',
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

		$criteria->compare('id_web_user',$this->id_web_user);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('no_identitas',$this->no_identitas,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('id_kategori',$this->id_kategori);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WebUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function validatePassword($password)
	{
		return crypt($password,$this->password)===$this->password;
	}

	public function hashPassword($password)
	{
		return crypt($password, $this->generateSalt());
	}

	public function generateSalt($cost=10)
	{
		if(!is_numeric($cost)||$cost<4||$cost>31){
			throw new CException(Yii::t('Cost parameter must be between 4 and 31.'));
		}
		// Get some pseudo-random data from mt_rand().
		$rand='';
		for($i=0;$i<8;++$i)
			$rand.=pack('S',mt_rand(0,0xffff));
		// Add the microtime for a little more entropy.
		$rand.=microtime();
		// Mix the bits cryptographically.
		$rand=sha1($rand,true);
		// Form the prefix that specifies hash algorithm type and cost parameter.
		$salt='$2a$'.str_pad((int)$cost,2,'0',STR_PAD_RIGHT).'$';
		// Append the random salt string in the required base64 format.
		$salt.=strtr(substr(base64_encode($rand),0,22),array('+'=>'.'));
		return $salt;
	}

	// ambil data keseluruhan
	function getAllData() {
    $sql = "SELECT tb_web_user.id_web_user, tb_web_user.id_kategori, tb_web_user.username, tb_web_user.password, tb_web_user.nama_lengkap, tb_web_user.no_identitas, tb_web_user.email, tb_kategori.id_kategori, tb_kategori.keterangan FROM tb_web_user INNER JOIN tb_kategori WHERE tb_web_user.id_kategori = tb_kategori.id_kategori AND tb_web_user.id_kategori != -1 ORDER BY tb_web_user.id_web_user ASC";

    $model = Yii::app()->db
        ->createCommand($sql)
        ->queryAll();
    return $model;
	}
}
