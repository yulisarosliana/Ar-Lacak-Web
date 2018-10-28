<?php

/**
 * This is the model class for table "tb_lokasi_penting".
 *
 * The followings are the available columns in table 'tb_lokasi_penting':
 * @property integer $id
 * @property string $title
 * @property string $streetAddress
 * @property double $lat
 * @property double $lng
 * @property integer $altitude
 * @property string $deskripsi
 * @property string $number
 * @property string $image
 */
class LokasiPenting extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tb_lokasi_penting';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, streetAddress, lat, lng, altitude, deskripsi, number, image', 'required'),
            array('altitude', 'numerical', 'integerOnly' => true),
//			array('lat, lng', 'string'),
            array('title', 'length', 'max' => 50),
            array('streetAddress', 'length', 'max' => 255),
            array('deskripsi', 'length', 'max' => 200),
            array('number', 'length', 'max' => 20),
            array('image', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'safe' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, streetAddress, lat, lng, altitude, deskripsi, number, image', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'streetAddress' => 'Street Address',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'altitude' => 'Altitude',
            'deskripsi' => 'Deskripsi',
            'number' => 'Number',
            'image' => 'Image',
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('streetAddress', $this->streetAddress, true);
        $criteria->compare('lat', $this->lat);
        $criteria->compare('lng', $this->lng);
        $criteria->compare('altitude', $this->altitude);
        $criteria->compare('deskripsi', $this->deskripsi, true);
        $criteria->compare('number', $this->number, true);
        $criteria->compare('image', $this->image, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return LokasiPenting the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
