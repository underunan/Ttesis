<?php

/**
 * This is the model class for table "Municipio".
 *
 * The followings are the available columns in table 'Municipio':
 * @property integer $idmunicipio
 * @property string $nombre
 * @property double $latlonne
 * @property double $latlonso
 *
 * The followings are the available model relations:
 * @property Barrio[] $barrios
 */
class Municipio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Municipio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, latlonne, latlonso', 'required'),
			array('latlonne, latlonso', 'numerical'),
			array('nombre', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idmunicipio, nombre, latlonne, latlonso', 'safe', 'on'=>'search'),
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
			'barrios' => array(self::HAS_MANY, 'Barrio', 'idmunicipio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idmunicipio' => 'Idmunicipio',
			'nombre' => 'Nombre',
			'latlonne' => 'Latlonne',
			'latlonso' => 'Latlonso',
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

		$criteria->compare('idmunicipio',$this->idmunicipio);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('latlonne',$this->latlonne);
		$criteria->compare('latlonso',$this->latlonso);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Municipio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
