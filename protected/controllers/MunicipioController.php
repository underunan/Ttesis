<?php

class MunicipioController extends Controller
{

	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filter
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
	    
	    	$findId = Yii::app()->db->createCommand("SELECT \"superuser\" FROM \"tbl_users\" WHERE id = '" .Yii::app()->user->id. "'")->queryRow();
            $idfn = $findId["superuser"];
           // echo $idfn;
            $acces = 'x';
            if($idfn =='1'){
                $acces = 'allow';
            }
            else if($idfn =='0')
            {
                $acces = 'deny';
            }
            
           //echo $acces;
	    
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array($acces, // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array($acces, // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
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
		$model=new Municipio;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Municipio']))
		{
			$model->attributes=$_POST['Municipio'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idmunicipio));
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

		if(isset($_POST['Municipio']))
		{
			$model->attributes=$_POST['Municipio'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idmunicipio));
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
	//public function actionDelete($id)
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

		$dataProvider=new CActiveDataProvider('Municipio');

            
		$model = Municipio::model()->findAll();
		
			$this->render('index',array('dataProvider'=>$dataProvider,'model'=>$model,));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Municipio('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Municipio']))
			$model->attributes=$_GET['Municipio'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Municipio the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Municipio::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Municipio $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='municipio-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
