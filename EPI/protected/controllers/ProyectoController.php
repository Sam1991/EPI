<?php

class ProyectoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/columnAdmin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','pdf','adminProyectos'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Proyecto;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Proyecto']))
		{
			$model->attributes=$_POST['Proyecto'];


			
			if($model->save()){

				//poner el creador como participante
				$alumnoProyecto=new Alumnoproyecto;
				$alumnoProyecto->pro_idProyecto=$model->pro_idProyecto;
				$alumnoProyecto->al_rut=Yii::app()->user->name;
				$alumnoProyecto->save();
				//fin_poner el creador como participante


				//crear el estado de postulacion
				$estadoPostulacionAlumno=new Estadopostulacion;
				$estadoPostulacionAlumno->pro_idProyecto=$model->pro_idProyecto;
				$estadoPostulacionAlumno->espos_inscripcion=1;
				$estadoPostulacionAlumno->save();
				//fin_crear el estado de postulacion

				//crear la tabla objetivos para el proyecto
				$objetivosProyecto=new Objetivos;
				$objetivosProyecto->pro_idProyecto=$model->pro_idProyecto;
				$objetivosProyecto->save();
				//fin_crear la tabla objetivos para el proyecto

				//crear la tabla cartagantt para el proyecto
				 $cartaganttProyecto=new Cartagantt;
				 $cartaganttProyecto->pro_idProyecto=$model->pro_idProyecto;
				 $cartaganttProyecto->save();
				//fin_crear la tabla cartagantt para el proyecto				

			$this->redirect(array('view','id'=>$model->pro_idProyecto));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Proyecto']))
		{
			$model->attributes=$_POST['Proyecto'];
			if($model->save()){
				
				// $this->redirect(array('view','id'=>$model->pro_idProyecto));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Proyecto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Proyecto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Proyecto']))
			$model->attributes=$_GET['Proyecto'];


		if(Yii::app()->user->isSuperAdmin){
			$this->render('admin',array(
				'model'=>$model,
			));	
		}
		else{
			$this->render('adminAlumno',array(
					'model'=>$model,
				));		
		}
	}

		public function actionAdminProyectos()
	{
		$model=new Proyecto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Proyecto']))
			$model->attributes=$_GET['Proyecto'];

			$this->render('adminProyectos',array(
				'model'=>$model,
			));	
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Proyecto the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Proyecto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Proyecto $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='proyecto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionPdf()
	 {
	 	ob_clean();
 		$html2pdfPath = Yii::getPathOfAlias('application.extensions.tcpdf');
  		require_once($html2pdfPath.'/tcpdf/tcpdf.php');

  		$fecha = date("d-m-Y");

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('EPI');
        $pdf->SetTitle('Postulación proyecto');
        $id=$_GET['id'];

        $PDF_HEADER_LOGO = 'logo.jpg';
        $PDF_HEADER_LOGO_HIGH = "180";
       // $PDF_HEADER_LOGO_WIDTH = "130";


        $pdf->SetHeaderData($PDF_HEADER_LOGO,$PDF_HEADER_LOGO_HIGH);
        $pdf->setHeaderFont(Array('helvetica', '', 10));
        $pdf->setFooterFont(Array('helvetica', '', 8));
        $pdf->SetMargins(15, 18, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);
        $pdf->SetAutoPageBreak(TRUE, 0);
        $pdf->SetFont('dejavusans', '', 7);
        $pdf->AddPage();
        $pdf->SetFillColor(205, 205, 205);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(10,63,122);
        $pdf->SetLineWidth(0);
        $pdf->SetFont('','',8);
        $pdf->Text('142','25','Informe generado el '.$fecha);
        $pdf->ln(5);

		$pdf->SetFont('times', 'B', 12);
		$pdf->Text('33','32','FORMULARIO CONVOCATORIA PARA ESTUDIANTES DE PREGRADO');
		$pdf->Text('45','36','PARA EL DESARROLLO DE PROYECTOS DE INNOVACIÓN');
		$pdf->ln(12);

        // OBTENER DATOS ALUMNOPROYECTO       
        $sql = "select al_rut from alumnoproyecto where '$id'=pro_idProyecto";
        $data1 =  Yii::app()->db->createCommand($sql)->queryAll();
        $rut = $data1[0]['al_rut'];

        // OBTENER DATOS ALUMNO   
        $sql2 = "select * from alumno where '$rut'=al_rut";
        $data2 =  Yii::app()->db->createCommand($sql2)->queryAll();

		// OBTENER DATOS PROYECTO    
        $sql3 = "select * from proyecto where '$id'=pro_idProyecto";
        $data3 =  Yii::app()->db->createCommand($sql3)->queryAll();
       
//INICIO RESUMEN ALUMNO
        $pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('1. RESUMEN PROYECTO');
        $pdf->writeHTML('1.1 ALUMNO(A)');

		$pdf->Cell(0.1,5,'');		
		$pdf->Cell(50,5,'NOMBRE ALUMNO(A):',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(130,5,$data2[0]['al_nombre'].' '.$data2[0]['al_paterno'].' '.$data2[0]['al_materno'],1,1,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(50,5,'TELÉFONO:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(50,5,$data2[0]['al_telefono'],1,0,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(40,5,'RUT:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(40,5,$data2[0]['al_rut'],1,1,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(50,5,'E-MAIL:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(130,5,$data2[0]['al_email'],1,1,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(50,5,'CARRERA:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(130,5,$data2[0]['al_carrera'],1,1,'C',true);
		$pdf->ln(8);
//FIN RESUMEN ALUMNO

//INICIO RESUMEN PROYECTO
        $pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('1.2 PROYECTO PROPUESTO');

		$pdf->Cell(0.1,5,'');
		$pdf->SetFillColor(205, 205, 205);		
		$pdf->Cell(50,5,'TÍTULO PROYECTO:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(130,5,$data3[0]['pro_titulo'],1,1,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(50,5,'DURACIÓN PROYECTO:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(40,5,$data3[0]['pro_duracion'],1,0,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(40,5,'ÁMBITO:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(50,5,$data3[0]['pro_ambito'],1,1,'C',true);
		$pdf->ln(8);
//FIN RESUMEN PROYECTO

//INICIO RESUMEN EMPRESA
        $pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('1.3 EMPRESA O INSTITUCIÓN PATROCINANTE DEL PROYECTO');

		$pdf->Cell(0.1,5,'');
		$pdf->SetFillColor(205, 205, 205);		
		$pdf->Cell(50,5,'NOMBRE EMPRESA:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(130,5,$data3[0]['pro_emNombre'],1,1,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(50,5,'NOMBRE CONTACTO:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(130,5,$data3[0]['pro_emContacto'],1,1,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(50,5,'TELÉFONO:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(30,5,$data3[0]['pro_emTelefono'],1,0,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(40,5,'E-MAIL:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(60,5,$data3[0]['emEmail'],1,1,'C',true);
		$pdf->ln(8);
//FIN RESUMEN EMPRESA

//INICIO RESUMEN PROFESOR
        $pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('1.4 PROFESOR GUÍA Y DIRECCIÓN DE ESCUELA');

		$pdf->Cell(0.1,5,'');
		$pdf->SetFillColor(205, 205, 205);		
		$pdf->Cell(50,5,'NOMBRE PROFESOR GUÍA:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(130,5,$data3[0]['pro_profeNombre'],1,1,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(50,5,'E-MAIL:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(70,5,$data3[0]['pro_profeEmail'],1,0,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(30,5,'TELÉFONO:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(30,5,$data3[0]['pro_profeTelefono'],1,1,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(50,5,'DIRECCIÓN DE ESCUELA:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(80,5,$data3[0]['pro_dirEscuela'],1,0,'C',true);
		$pdf->SetFillColor(205, 205, 205);
		$pdf->SetFont('dejavusans','B',8);
		$pdf->Cell(30,5,'V°B° ESCUELA:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(20,5,$data3[0]['pro_vBEscuela'],1,1,'C',true);
		$pdf->ln(8);
//FIN RESUMEN PROFESOR

//INICIO RESUMEN APORTE
        $pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('1.5 ESTRUCTURA DE COSTOS DEL PROYECTO');
       
		$pdf->Cell(0.1,5,'');
		$pdf->SetFillColor(205, 205, 205);		
		$pdf->Cell(50,5,'APORTES',1,0,'C',true);
		$pdf->Cell(45,5,'APORTE ($) VALORADO:',1,0,'C',true);
		$pdf->Cell(45,5,'APORTE ($) PECUNIARIO:',1,0,'C',true);
		$pdf->Cell(40,5,'TOTAL ($):',1,1,'C',true);
		$pdf->Cell(50,5,'EMPRESA PATROCINANTE:',1,0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetFont('dejavusans','',8);
		$pdf->Cell(45,5,$data3[0]['pro_aporteValorado'],1,0,'C',true);
		$pdf->Cell(45,5,$data3[0]['pro_aportePecuniario'],1,0,'C',true);
		$pdf->Cell(40,5,$data3[0]['pro_aporteValorado']+$data3[0]['pro_aportePecuniario'],1,1,'C',true);
		$pdf->ln(8);
//FIN RESUMEN APORTE

//INICIO RESUMEN EJECUTIVO
        $pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('1.6 RESUMEN EJECUTIVO DEL PROYECTO DE INNOVACIÓN');
       
		$pdf->Cell(0.1,5,'');
		$pdf->Cell(180,50,$data3[0]['pro_resumenEjecutivo'],1,1,'',true);
		$pdf->ln(8);
// FIN RESUMEN EJECUTIVO

		$pdf->AddPage();
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(10,63,122);
        $pdf->SetLineWidth(0);
        $pdf->ln(5);

//INICIO RESUMEN EMPRESA PATROCINANTE
        $pdf->ln(5);
        $pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('2. EMPRESA PATROCINANTE');
		$pdf->Cell(0.1,5,'');
		$pdf->Cell(180,250,$data3[0]['pro_descripcionEmpresa'],1,1,'',true);
		$pdf->ln(8);
// FIN RESUMEN EMPRESA PATROCINANTE

		$pdf->AddPage();
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(10,63,122);
        $pdf->SetLineWidth(0);
        $pdf->ln(5);
	 
//INICIO RESUMEN DEFINICIÓN DEL PROBLEMA
        $pdf->ln(5);
        $pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('3. DESCRIPCIÓN DEL ANTEPROYECTO');
        $pdf->writeHTML('3.1 DEFINICIÓN DEL PROBLEMA U OPORTUNIDAD');
       
		$pdf->Cell(0.1,5,'');
		$pdf->Cell(180,250,$data3[0]['pro_definicionProblema'],1,1,'',true);
		$pdf->ln(8);
// FIN RESUMEN DEFINICIÓN DEL PROBLEMA

		$pdf->AddPage();
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(10,63,122);
        $pdf->SetLineWidth(0);
        $pdf->ln(5);

//INICIO RESUMEN SOLUCIÓN PROPUESTA
        $pdf->ln(5);
		$pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('3.2 SOLUCIÓN INNOVADORA PROPUESTA');

		$pdf->Cell(0.1,5,'');
		$pdf->Cell(180,250,$data3[0]['pro_solucionPropuesta'],1,1,'',true);
		$pdf->ln(8);
// FIN RESUMEN SOLUCIÓN PROPUESTA

		$pdf->AddPage();
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(10,63,122);
        $pdf->SetLineWidth(0);
        $pdf->ln(5);

//INICIO RESUMEN ESTADO DEL ARTE
        $pdf->ln(5);
        $pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('3.3 ANÁLISIS DEL ESTADO DEL ARTE');
       
		$pdf->Cell(0.1,5,'');
		$pdf->Cell(180,250,$data3[0]['pro_estadoArte'],1,1,'',true);
		$pdf->ln(8);
// FIN RESUMEN ESTADO DEL ARTE

		$pdf->AddPage();
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(10,63,122);
        $pdf->SetLineWidth(0);
        $pdf->ln(5);

//INICIO RESUMEN OBJETIVO GENERAL
        $pdf->ln(5);
        $pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('3.4 OBJETIVOS DEL PROYECTO');
        $pdf->writeHTML('3.4.1 OBJETIVO GENERAL');

		$pdf->Cell(0.1,5,'');
		$pdf->Cell(180,30,$data3[0]['pro_objetivoGeneral'],1,1,'',true);
		$pdf->ln(8);
// FIN RESUMEN OBJETIVO GENERAL

//INICIO RESUMEN METODOLOGIA
		$pdf->ln(5);
        $pdf->SetFont('dejavusans','B',8);
        $pdf->writeHTML('3.6 METODOLOGÍA');

		$pdf->Cell(0.1,5,'');
		$pdf->Cell(180,205,$data3[0]['pro_metodologia'],1,1,'',true);
		$pdf->ln(8);
// FIN RESUMEN METODOLOGIA



        $pdf->Output("Postulacion'$fecha'.pdf", "I");
        Yii::app()->end();
    		
    	}

}
