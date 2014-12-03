<?php

/**
 * This is the model class for table "alumno".
 *
 * The followings are the available columns in table 'alumno':
 * @property string $al_rut
 * @property string $al_nombre
 * @property string $al_carrera
 * @property string $al_email
 * @property string $al_telefono
 * @property string $al_comentario
 * @property string $al_clave
 * @property string $al_paterno
 * @property string $al_materno
 * @property string $al_campus
 * @property string $al_email2
 */
class Alumno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('al_rut, al_nombre, al_carrera, al_email, al_telefono, al_comentario, al_clave, al_paterno, al_materno, al_campus', 'required'),
			array('al_rut', 'length', 'max'=>15),
			array('al_nombre, al_carrera, al_comentario, al_clave, al_paterno, al_materno, al_campus', 'length', 'max'=>100),
			array('al_email, al_email2', 'length', 'max'=>30),
			array('al_telefono', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('al_rut, al_nombre, al_carrera, al_email, al_telefono, al_comentario, al_clave, al_paterno, al_materno, al_campus, al_email2', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'al_rut' => 'Al Rut',
			'al_nombre' => 'Al Nombre',
			'al_carrera' => 'Al Carrera',
			'al_email' => 'Al Email',
			'al_telefono' => 'Al Telefono',
			'al_comentario' => 'Al Comentario',
			'al_clave' => 'Al Clave',
			'al_paterno' => 'Al Paterno',
			'al_materno' => 'Al Materno',
			'al_campus' => 'Al Campus',
			'al_email2' => 'Al Email2',
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

		$criteria->compare('al_rut',$this->al_rut,true);
		$criteria->compare('al_nombre',$this->al_nombre,true);
		$criteria->compare('al_carrera',$this->al_carrera,true);
		$criteria->compare('al_email',$this->al_email,true);
		$criteria->compare('al_telefono',$this->al_telefono,true);
		$criteria->compare('al_comentario',$this->al_comentario,true);
		$criteria->compare('al_clave',$this->al_clave,true);
		$criteria->compare('al_paterno',$this->al_paterno,true);
		$criteria->compare('al_materno',$this->al_materno,true);
		$criteria->compare('al_campus',$this->al_campus,true);
		$criteria->compare('al_email2',$this->al_email2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
