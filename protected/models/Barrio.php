<?php

/**
 * This is the model class for table "Barrio".
 *
 * The followings are the available columns in table 'Barrio':
 * @property integer $idbarrio
 * @property integer $idmunicipio
 * @property string $nombre
 * @property double $latlonne
 * @property double $latlonso
 *
 * The followings are the available model relations:
 * @property Municipio $idmunicipio0
 * @property Producto[] $productos
 */
class Barrio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Barrio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idmunicipio, nombre, latlonne, latlonso', 'required'),
			array('idmunicipio', 'numerical', 'integerOnly'=>true),
			array('latlonne, latlonso', 'numerical'),
			array('nombre', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idbarrio, idmunicipio, nombre, latlonne, latlonso', 'safe', 'on'=>'search'),
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
			'idmunicipio0' => array(self::BELONGS_TO, 'Municipio', 'idmunicipio'),
			'productos' => array(self::HAS_MANY, 'Producto', 'idbarrio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idbarrio' => 'Idbarrio',
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

		$criteria->compare('idbarrio',$this->idbarrio);
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
	 * @return Barrio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
