<?php

/**
 * This is the model class for table "actividades".
 *
 * The followings are the available columns in table 'actividades':
 * @property integer $act_id
 * @property string $act_convocatoria
 * @property string $act_campus
 * @property string $act_nombre
 * @property string $act_fecha
 * @property string $act_horaInicio
 * @property string $act_horaFin
 * @property string $act_lugar
 * @property string $act_descripcion
 */
class Actividades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'actividades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('act_convocatoria, act_campus, act_nombre, act_fecha, act_horaInicio, act_horaFin', 'required'),
			array('act_convocatoria', 'length', 'max'=>10),
			array('act_campus, act_horaInicio, act_horaFin', 'length', 'max'=>20),
			array('act_nombre, act_fecha, act_lugar', 'length', 'max'=>255),
			array('act_descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('act_id, act_convocatoria, act_campus, act_nombre, act_fecha, act_horaInicio, act_horaFin, act_lugar, act_descripcion', 'safe', 'on'=>'search'),
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
			'act_id' => 'Act',
			'act_convocatoria' => 'Act Convocatoria',
			'act_campus' => 'Act Campus',
			'act_nombre' => 'Act Nombre',
			'act_fecha' => 'Act Fecha',
			'act_horaInicio' => 'Act Hora Inicio',
			'act_horaFin' => 'Act Hora Fin',
			'act_lugar' => 'Act Lugar',
			'act_descripcion' => 'Act Descripcion',
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

		$criteria->compare('act_id',$this->act_id);
		$criteria->compare('act_convocatoria',$this->act_convocatoria,true);
		$criteria->compare('act_campus',$this->act_campus,true);
		$criteria->compare('act_nombre',$this->act_nombre,true);
		$criteria->compare('act_fecha',$this->act_fecha,true);
		$criteria->compare('act_horaInicio',$this->act_horaInicio,true);
		$criteria->compare('act_horaFin',$this->act_horaFin,true);
		$criteria->compare('act_lugar',$this->act_lugar,true);
		$criteria->compare('act_descripcion',$this->act_descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Actividades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
