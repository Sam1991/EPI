<?php

/**
 * This is the model class for table "proyecto".
 *
 * The followings are the available columns in table 'proyecto':
 * @property integer $pro_idProyecto
 * @property string $pro_titulo
 * @property string $pro_duracion
 * @property string $pro_ambito
 * @property string $pro_emNombre
 * @property string $pro_emContacto
 * @property string $pro_emTelefono
 * @property string $emEmail
 * @property string $pro_profeNombre
 * @property string $pro_profeEmail
 * @property string $pro_profeTelefono
 * @property string $pro_dirEscuela
 * @property string $pro_vBEscuela
 * @property integer $pro_aporteValorado
 * @property integer $pro_aportePecuniario
 * @property string $pro_resumenEjecutivo
 * @property string $pro_descripcionEmpresa
 * @property string $pro_definicionProblema
 * @property string $pro_solucionPropuesta
 * @property string $pro_estadoArte
 * @property string $pro_objetivoGeneral
 * @property string $pro_metodologia
 * @property string $pro_cartaGantt
 */
class Proyecto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proyecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_titulo, pro_duracion, pro_ambito, pro_emNombre, pro_emContacto, pro_emTelefono, emEmail, pro_profeNombre, pro_profeEmail, pro_profeTelefono, pro_dirEscuela, pro_vBEscuela, pro_aporteValorado, pro_aportePecuniario, pro_resumenEjecutivo, pro_descripcionEmpresa, pro_definicionProblema, pro_solucionPropuesta, pro_estadoArte, pro_objetivoGeneral, pro_metodologia, pro_cartaGantt', 'required'),
			array('pro_aporteValorado, pro_aportePecuniario', 'numerical', 'integerOnly'=>true),
			array('pro_cartaGantt', 'file','types'=>'jpg, gif, png,txt,pdf'),
			array('pro_titulo, pro_duracion, pro_ambito, pro_emNombre, pro_emContacto, pro_emTelefono, emEmail, pro_profeNombre, pro_profeEmail, pro_profeTelefono, pro_dirEscuela, pro_vBEscuela', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_idProyecto, pro_titulo, pro_duracion, pro_ambito, pro_emNombre, pro_emContacto, pro_emTelefono, emEmail, pro_profeNombre, pro_profeEmail, pro_profeTelefono, pro_dirEscuela, pro_vBEscuela, pro_aporteValorado, pro_aportePecuniario, pro_resumenEjecutivo, pro_descripcionEmpresa, pro_definicionProblema, pro_solucionPropuesta, pro_estadoArte, pro_objetivoGeneral, pro_metodologia, pro_cartaGantt', 'safe', 'on'=>'search'),
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
			'pro_idProyecto' => 'Pro Id Proyecto',
			'pro_titulo' => 'TÍTULO PROYECTO',
			'pro_duracion' => 'DURACIÓN PROYECTO',
			'pro_ambito' => 'ÁMBITO',
			'pro_emNombre' => 'NOMBRE EMPRESA',
			'pro_emContacto' => 'NOMBRE CONTACTO',
			'pro_emTelefono' => 'TELÉFONO',
			'emEmail' => 'E-MAIL',
			'pro_profeNombre' => 'NOMBRE PROFESOR GUÍA',
			'pro_profeEmail' => 'E-MAIL',
			'pro_profeTelefono' => 'TELÉFONO',
			'pro_dirEscuela' => 'DIRECCIÓN DE ESCUELA',
			'pro_vBEscuela' => 'V°B° ESCUELA',
			'pro_aporteValorado' => 'APORTE ($) VALORADO',
			'pro_aportePecuniario' => 'APORTE ($) PECUNIARIO',
			'pro_resumenEjecutivo' => 'Pro Resumen Ejecutivo',
			'pro_descripcionEmpresa' => 'Pro Descripcion Empresa',
			'pro_definicionProblema' => 'Pro Definicion Problema',
			'pro_solucionPropuesta' => 'Pro Solucion Propuesta',
			'pro_estadoArte' => 'Pro Estado Arte',
			'pro_objetivoGeneral' => 'Objetivo general',
			'pro_metodologia' => 'Pro Metodologia',
			'pro_cartaGantt' => 'Pro Carta Gantt',
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

		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('pro_titulo',$this->pro_titulo,true);
		$criteria->compare('pro_duracion',$this->pro_duracion,true);
		$criteria->compare('pro_ambito',$this->pro_ambito,true);
		$criteria->compare('pro_emNombre',$this->pro_emNombre,true);
		$criteria->compare('pro_emContacto',$this->pro_emContacto,true);
		$criteria->compare('pro_emTelefono',$this->pro_emTelefono,true);
		$criteria->compare('emEmail',$this->emEmail,true);
		$criteria->compare('pro_profeNombre',$this->pro_profeNombre,true);
		$criteria->compare('pro_profeEmail',$this->pro_profeEmail,true);
		$criteria->compare('pro_profeTelefono',$this->pro_profeTelefono,true);
		$criteria->compare('pro_dirEscuela',$this->pro_dirEscuela,true);
		$criteria->compare('pro_vBEscuela',$this->pro_vBEscuela,true);
		$criteria->compare('pro_aporteValorado',$this->pro_aporteValorado);
		$criteria->compare('pro_aportePecuniario',$this->pro_aportePecuniario);
		$criteria->compare('pro_resumenEjecutivo',$this->pro_resumenEjecutivo,true);
		$criteria->compare('pro_descripcionEmpresa',$this->pro_descripcionEmpresa,true);
		$criteria->compare('pro_definicionProblema',$this->pro_definicionProblema,true);
		$criteria->compare('pro_solucionPropuesta',$this->pro_solucionPropuesta,true);
		$criteria->compare('pro_estadoArte',$this->pro_estadoArte,true);
		$criteria->compare('pro_objetivoGeneral',$this->pro_objetivoGeneral,true);
		$criteria->compare('pro_metodologia',$this->pro_metodologia,true);
		$criteria->compare('pro_cartaGantt',$this->pro_cartaGantt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchAlumno()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;


		//que solo vea los proyectos en los que esta inscrito
			// obtener datos del usuario activo 
		$proyectos=alumnoproyecto::model()->findAll("al_rut='".Yii::app()->user->name."'");

		// echo $proyectos[0]->pro_idProyecto;


		$condicion='';
		for ($i=0; $i <count($proyectos) ; $i++) { 
			if($i>0){
				$condicion=$condicion.' or ';		
			}
			$condicion=$condicion."pro_idProyecto =".$proyectos[$i]->pro_idProyecto;
		}

		$criteria->addCondition($condicion);	
		
		if(count($proyectos)==0){
			$criteria->addCondition("pro_idProyecto =-1");
		}
		// echo $condicion;
		

		




		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('pro_titulo',$this->pro_titulo,true);
		$criteria->compare('pro_duracion',$this->pro_duracion,true);
		$criteria->compare('pro_ambito',$this->pro_ambito,true);
		$criteria->compare('pro_emNombre',$this->pro_emNombre,true);
		$criteria->compare('pro_emContacto',$this->pro_emContacto,true);
		$criteria->compare('pro_emTelefono',$this->pro_emTelefono,true);
		$criteria->compare('emEmail',$this->emEmail,true);
		$criteria->compare('pro_profeNombre',$this->pro_profeNombre,true);
		$criteria->compare('pro_profeEmail',$this->pro_profeEmail,true);
		$criteria->compare('pro_profeTelefono',$this->pro_profeTelefono,true);
		$criteria->compare('pro_dirEscuela',$this->pro_dirEscuela,true);
		$criteria->compare('pro_vBEscuela',$this->pro_vBEscuela,true);
		$criteria->compare('pro_aporteValorado',$this->pro_aporteValorado);
		$criteria->compare('pro_aportePecuniario',$this->pro_aportePecuniario);
		$criteria->compare('pro_resumenEjecutivo',$this->pro_resumenEjecutivo,true);
		$criteria->compare('pro_descripcionEmpresa',$this->pro_descripcionEmpresa,true);
		$criteria->compare('pro_definicionProblema',$this->pro_definicionProblema,true);
		$criteria->compare('pro_solucionPropuesta',$this->pro_solucionPropuesta,true);
		$criteria->compare('pro_estadoArte',$this->pro_estadoArte,true);
		$criteria->compare('pro_objetivoGeneral',$this->pro_objetivoGeneral,true);
		$criteria->compare('pro_metodologia',$this->pro_metodologia,true);
		$criteria->compare('pro_cartaGantt',$this->pro_cartaGantt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proyecto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}