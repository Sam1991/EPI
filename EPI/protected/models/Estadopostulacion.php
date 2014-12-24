<?php

/**
 * This is the model class for table "estadopostulacion".
 *
 * The followings are the available columns in table 'estadopostulacion':
 * @property string $al_rut
 * @property integer $espos_inscripcion
 * @property integer $espos_informeInnovacion
 * @property integer $espos_anexo2
 * @property integer $espos_cartaEmpresa
 * @property integer $espos_prehallasgo
 * @property integer $espos_copiaCarnet
 * @property integer $espos_alumnoRegular
 * @property integer $espos_curriculum
 * @property integer $espos_informeFinal
 */
class Estadopostulacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estadopostulacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('al_rut', 'required'),
			array('espos_inscripcion, espos_informeInnovacion, espos_anexo2, espos_cartaEmpresa, espos_prehallasgo, espos_copiaCarnet, espos_alumnoRegular, espos_curriculum, espos_informeFinal', 'numerical', 'integerOnly'=>true),
			array('al_rut', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('al_rut, espos_inscripcion, espos_informeInnovacion, espos_anexo2, espos_cartaEmpresa, espos_prehallasgo, espos_copiaCarnet, espos_alumnoRegular, espos_curriculum, espos_informeFinal', 'safe', 'on'=>'search'),
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
			'al_rut' => 'Rut',
			'espos_inscripcion' => 'Inscripcion',
			'espos_informeInnovacion' => 'Informe Innovacion',
			'espos_anexo2' => 'Anexo2',
			'espos_cartaEmpresa' => 'Carta Empresa',
			'espos_prehallasgo' => 'Prehallasgo',
			'espos_copiaCarnet' => 'Copia Carnet',
			'espos_alumnoRegular' => 'Alumno Regular',
			'espos_curriculum' => 'Curriculum',
			'espos_informeFinal' => 'Informe Final',
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
		$criteria->compare('espos_inscripcion',$this->espos_inscripcion);
		$criteria->compare('espos_informeInnovacion',$this->espos_informeInnovacion);
		$criteria->compare('espos_anexo2',$this->espos_anexo2);
		$criteria->compare('espos_cartaEmpresa',$this->espos_cartaEmpresa);
		$criteria->compare('espos_prehallasgo',$this->espos_prehallasgo);
		$criteria->compare('espos_copiaCarnet',$this->espos_copiaCarnet);
		$criteria->compare('espos_alumnoRegular',$this->espos_alumnoRegular);
		$criteria->compare('espos_curriculum',$this->espos_curriculum);
		$criteria->compare('espos_informeFinal',$this->espos_informeFinal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estadopostulacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
