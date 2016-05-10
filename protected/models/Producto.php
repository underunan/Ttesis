<?php

/**
 * This is the model class for table "Producto".
 *
 * The followings are the available columns in table 'Producto':
 * @property integer $idproducto
 * @property integer $idusuario
 * @property integer $idcategoria
 * @property integer $idmoneda
 * @property integer $idestado_fisico
 * @property integer $idbarrio
 * @property string $nombre
 * @property double $precio
 * @property string $descripcion
 * @property string $fecha_publicacion
 * @property string $direccion
 *
 * The followings are the available model relations:
 * @property Barrio $idbarrio0
 * @property Categoria $idcategoria0
 * @property EstadoFisico $idestadoFisico
 * @property Moneda $idmoneda0
 * @property Users $idusuario0
 * @property Imagen[] $imagens
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idusuario, idcategoria, idmoneda, idestado_fisico, idbarrio, nombre, precio, descripcion, fecha_publicacion, direccion', 'required'),
			array('idusuario, idcategoria, idmoneda, idestado_fisico, idbarrio', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('nombre', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idproducto, idusuario, idcategoria, idmoneda, idestado_fisico, idbarrio, nombre, precio, descripcion, fecha_publicacion, direccion', 'safe', 'on'=>'search'),
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
			'idbarrio0' => array(self::BELONGS_TO, 'Barrio', 'idbarrio'),
			'idcategoria0' => array(self::BELONGS_TO, 'Categoria', 'idcategoria'),
			'idestadoFisico' => array(self::BELONGS_TO, 'EstadoFisico', 'idestado_fisico'),
			'idmoneda0' => array(self::BELONGS_TO, 'Moneda', 'idmoneda'),
			'idusuario0' => array(self::BELONGS_TO, 'Users', 'idusuario'),
			'imagen' => array(self::HAS_MANY, 'Imagen', 'idproducto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idproducto' => 'Idproducto',
			'idusuario' => 'Idusuario',
			'idcategoria' => 'Idcategoria',
			'idmoneda' => 'Idmoneda',
			'idestado_fisico' => 'Idestado Fisico',
			'idbarrio' => 'Idbarrio',
			'nombre' => 'Nombre',
			'precio' => 'Precio',
			'descripcion' => 'Descripcion',
			'fecha_publicacion' => 'Fecha Publicacion',
			'direccion' => 'Direccion',
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

		$criteria->compare('idproducto',$this->idproducto);
		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('idcategoria',$this->idcategoria);
		$criteria->compare('idmoneda',$this->idmoneda);
		$criteria->compare('idestado_fisico',$this->idestado_fisico);
		$criteria->compare('idbarrio',$this->idbarrio);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha_publicacion',$this->fecha_publicacion,true);
		$criteria->compare('direccion',$this->direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
