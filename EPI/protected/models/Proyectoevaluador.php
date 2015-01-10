<?php

/**
 * This is the model class for table "proyectoevaluador".
 *
 * The followings are the available columns in table 'proyectoevaluador':
 * @property integer $pre_id
 * @property integer $pro_idProyecto
 * @property string $ev_rut
 * @property integer $pre_nota
 * @property string $pre_comentario
 * @property string $pre_estadoPostulacion
 * @property string $pre_estadoEvaluacion
 */
class Proyectoevaluador extends CActiveRecord
{
		public $titulo;
		public $rut;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proyectoevaluador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_idProyecto, ev_rut', 'required'),
			array('pro_idProyecto', 'unique'),
			array('pre_nota','nota'),
			array('pre_comentario','comentario'),
			array('pre_estadoPostulacion','estadopostulacion'),
			array('pre_nota', 'numerical', 'integerOnly'=>true,'min'=>10, 'max'=>70),
			array('ev_rut', 'length', 'max'=>15),
			array('pre_estadoPostulacion', 'length', 'min'=>8, 'max'=>50),
			array('pre_comentario,pre_nota', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pre_id, pro_idProyecto, ev_rut, pre_nota, pre_comentario, pre_estadoPostulacion, pre_estadoEvaluacion', 'safe', 'on'=>'search'),
			array('titulo', 'safe', 'on'=>'search'),
		);
	}

		public function comentario ($attribute, $param){
			if ((Yii::app()->user->checkAccess('evaluador')&&!Yii::app()->user->isSuperAdmin)
				||($this->pre_estadoEvaluacion=="No"))
			{
				if ($this->pre_comentario==null)
			$this->addError($attribute, 'El COMENTARIO no puede ser nulo');	
			}		
	}

		public function nota ($attribute, $param){
			if (Yii::app()->user->checkAccess('evaluador')&&!Yii::app()->user->isSuperAdmin){
				if ($this->pre_nota==null)
			$this->addError($attribute, 'La NOTA no puede ser nulo');	
			}		
	}

		public function estadopostulacion ($attribute, $param){
			if (Yii::app()->user->checkAccess('evaluador')&&!Yii::app()->user->isSuperAdmin){
				if ($this->pre_estadoPostulacion==null)
			$this->addError($attribute, 'El ESTADO DE POSTULACIÓN no puede ser nulo');	
			}		
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'ev_pro' => array(self::BELONGS_TO, 'Proyecto', 'pro_idProyecto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pre_id' => 'Pre',
			'pro_idProyecto' => 'ID PROYECTO',
			'ev_rut' => 'RUT EVALUADOR',
			'pre_nota' => 'NOTA',
			'pre_comentario' => 'COMENTARIO',
			'pre_estadoPostulacion' => 'ESTADO POSTULACIÓN',
			'pre_estadoEvaluacion' => 'AUTORIZACIÓN EVALUACIÓN',
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
		$criteria->compare('pre_id',$this->pre_id);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('pro_titulo',$this->titulo,true);
		$criteria->compare('ev_rut',$this->ev_rut,true);
		$criteria->compare('pre_nota',$this->pre_nota);
		$criteria->compare('pre_comentario',$this->pre_comentario,true);
		$criteria->compare('pre_estadoPostulacion',$this->pre_estadoPostulacion,true);
		$criteria->compare('pre_estadoEvaluacion',$this->pre_estadoEvaluacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function search1()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$rut = Yii::app()->user->name;
		$criteria->addCondition("ev_rut='$rut'");
		$criteria->compare('pre_id',$this->pre_id);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('ev_rut',$this->ev_rut,true);
		$criteria->compare('pre_nota',$this->pre_nota);
		$criteria->compare('pre_comentario',$this->pre_comentario,true);
		$criteria->compare('pre_estadoPostulacion',$this->pre_estadoPostulacion,true);
		$criteria->compare('pre_estadoEvaluacion',$this->pre_estadoEvaluacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

		public function search2()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$model=alumnoproyecto::model()->findAll("al_rut='".Yii::app()->user->name."'");
		$proyecto = $model[0]->pro_idProyecto;

		$criteria->addCondition("pro_idProyecto=$proyecto");
		$criteria->addCondition("pre_estadoEvaluacion='Si'");
		$criteria->compare('pre_id',$this->pre_id);
		$criteria->compare('pro_idProyecto',$this->pro_idProyecto);
		$criteria->compare('ev_rut',$this->ev_rut,true);
		$criteria->compare('pre_nota',$this->pre_nota);
		$criteria->compare('pre_comentario',$this->pre_comentario,true);
		$criteria->compare('pre_estadoPostulacion',$this->pre_estadoPostulacion,true);
		$criteria->compare('pre_estadoEvaluacion',$this->pre_estadoEvaluacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proyectoevaluador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getRut ($pro_idProyecto){
		$model = alumnoproyecto::model()->findAll($pro_idProyecto);
			return $model;
		}
		
	

}
