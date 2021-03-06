<?php

class ProductoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		//	'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
	/*public function actionCreate(){
		$model=new Producto;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Producto']))
		{
			$model->attributes=$_POST['Producto'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idproducto));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}*/

/*	public function actionCreate()
	{
		$model=new Producto;
		$model_imagen=new Imagen;

			if(isset($_POST['Producto'], $_POST['Imagen']))
		{
			$model->attributes=$_POST['Producto'];
			$model_imagen->attributes=$_POST['Imagen'];

			$model_imagen->idproducto = 19;
			$valid = $model->validate();
			$valid = $model_imagen->validate() && $valid;

			if($valid){
			    if($model->save(false))
			    $model_imagen->idproducto = $model->idproducto;
			    if($model_imagen->save(false)){
				$this->redirect(array('view','id'=>$model->idproducto));
		            }
		        }
	        }

		$this->render('create',array(
			'model'=>$model,
			'model_imagen'=>$model_imagen,
		));
	}
*/
	public function actionCreate()
	{
		$model=new Producto;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Producto']))
		{
			$model->attributes=$_POST['Producto'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idproducto));
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
		$model_imagen=new Imagen;

		if(isset($_POST['Producto'], $_POST['Imagen']))
		{
			$model->attributes=$_POST['Producto'];
			$model_imagen->attributes=$_POST['Imagen'];

            $model_imagen->idproducto = $id;
            $valid = $model->validate();
			$valid = $model_imagen->validate() && $valid;

	        if($valid){
			    if($model->save(false))
			    $model_imagen->idproducto = $model->idproducto;
			    if($model_imagen->save(false)){
				$this->redirect(array('view','id'=>$model->idproducto));
		            }
		        }
	        }

		$this->render('create',array(
			'model'=>$model,
			'model_imagen'=>$model_imagen,
		));/*		if($model->save())
				$this->redirect(array('view','id'=>$model->idproducto));
		}

		$this->render('update',array(
			'model'=>$model,
		));*/
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

	/*public function actionIndex()
	{
	    $dataProvider = Producto::model()->findAll(array('order'=>'idproducto DESC'));
        $dataProvider = new CActiveDataProvider('Producto');
        $model=new Producto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Producto']))


			$model->attributes=$_GET['Producto'];
        	$this->render('index',array(
			'model'=>$model,'dataProvider'=>$dataProvider,
		));
	}*/

	public function actionIndex()	{
      $dataProvider = new CActiveDataProvider('Producto');
      $model=new Producto();
		if(isset($_GET['Producto'])){
           // $model->attributes = $_GET['Producto'];
        $this->loadProducto($model,
            $_GET['Producto']['nombre'],
            $_GET['Producto']['idbarrio']);		}
        else{
        $this->render('index',array('dataProvider'=>$dataProvider,'model'=>$model,));
        }

    }

    function loadProducto($model, $nombre, $barrio)
    {
    header('Location: index.php?r=producto2%2Findex&Producto%5Bidbarrio%5D='.$barrio.'&articulo=&Producto%5Bnombre%5D='.$nombre.'&Producto%5Bprecio%5D=%24100&Producto%5Bidestado_fisico%5D=&Producto%5Bidmoneda%5D=');
    exit;
//index.php?r=producto2%2Findex&Producto%5Bidbarrio%5D='.$barrio.'&articulo=&Producto%5Bnombre%5D='.$nombre.'&Producto%5Bprecio%5D=%24100&Producto%5Bidestado_fisico%5D=&Producto%5Bidmoneda%5D=

    }



	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Producto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Producto']))
			$model->attributes=$_GET['Producto'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Producto the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Producto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Producto $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='producto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
