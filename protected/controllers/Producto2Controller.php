<?php

class Producto2Controller extends Controller
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

	public function actionIndex()
	{
      $dataProvider = new CActiveDataProvider('Producto');
      $model=new Producto();
		if(isset($_GET['Producto'])){
           // $model->attributes = $_GET['Producto'];
        $this->loadProducto($model,
            $_GET['Producto']['idestado_fisico'],
            $_GET['Producto']['idmoneda'],
            $_GET['Producto']['nombre'],
            $_GET['Producto']['idbarrio']);		}
        else{
            $this->loadAllProducto($model);
        }
	}

    public function loadProducto($model,$id, $id2, $id3, $id4){
        try{
            $producto1=Producto::model()->findAll($this->Msearch($model, $id, $id2, $id3, $id4));
            $this->render('index',array(
    		    'model'=>$model,
    		    'model2'=>$producto1,
    		));
        }
        catch(exception $e){
            $this->loadAllProducto($model);
        }
    }

    public function loadAllProducto($model){
    	    $producto1=Producto::model()->findAll();
            $this->render('index',array(
    		    'model'=>$model,
    		    'model2'=>$producto1,
    		));
     }


	public function loadModel($id)
	{
		$model=Producto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='producto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


    public function Msearch($model, $id, $id2, $id3, $id4)
    {
        $criteria = new CDbCriteria();

	    if($id and $id2 and $id3 and $id4){
	        $criteria->condition = "idestado_fisico = :idestado_fisico and idmoneda = :idmoneda and nombre ~*:nombre and idbarrio=:idbarrio";
	        $criteria->params = array(':idestado_fisico' => $id, ':idmoneda' => $id2, ':nombre'=> $id3, ':idbarrio'=> $id4);	}


	    elseif($id and $id2 and $id3){
	        $criteria->condition = "idestado_fisico = :idestado_fisico and idmoneda = :idmoneda and nombre ~*:nombre";
	        $criteria->params = array(':idestado_fisico' => $id, ':idmoneda' => $id2, ':nombre'=> $id3);	    }
	    elseif($id and $id3 and $id4){
	        $criteria->condition = "idestado_fisico = :idestado_fisico and nombre ~*:nombre and idbarrio=:idbarrio";
	        $criteria->params = array(':idestado_fisico' => $id, ':nombre'=> $id3,':idbarrio' => $id4, );	    }
	    elseif($id and $id2 and $id4){
	        $criteria->condition = "idestado_fisico = :idestado_fisico and idmoneda=:idmoneda and idbarrio=:idbarrio";
	        $criteria->params = array(':idestado_fisico' => $id, ':idmoneda'=> $id2,':idbarrio' => $id4, );	    }
	    elseif($id2 and $id3 and $id4){
	        $criteria->condition = "idmoneda = :idmoneda and nombre ~*:nombre and idbarrio=:idbarrio";
	        $criteria->params = array(':idmoneda' => $id2, ':nombre'=> $id3, ':idbarrio'=> $id4);				}


	    elseif($id and $id2){
	        $criteria->condition = "idestado_fisico = :idestado_fisico and idmoneda = :idmoneda";
	        $criteria->params = array(':idestado_fisico' => $id, ':idmoneda' => $id2);	}
	    elseif($id and $id3){
	        $criteria->condition = "idestado_fisico = :idestado_fisico and nombre ~*:nombre";
	        $criteria->params = array(':idestado_fisico' => $id, ':nombre'=> $id3);	    }
	    elseif($id and $id4){
	        $criteria->condition = "idestado_fisico = :idestado_fisico and idbarrio=:idbarrio";
	        $criteria->params = array(':idestado_fisico' => $id, ':idbarrio'=> $id4);	}


	    elseif($id2 and $id3){
	        $criteria->condition = "idmoneda = :idmoneda and nombre ~*:nombre";
	        $criteria->params = array(':idmoneda' => $id2, ':nombre'=> $id3);	}
	    elseif($id2 and $id4){
	        $criteria->condition = "idmoneda = :idmoneda and idbarrio=:idbarrio";
	        $criteria->params = array(':idmoneda' => $id2, ':idbarrio'=> $id4);	}
	    elseif($id3 and $id4){
	        $criteria->condition = "nombre ~*:nombre and idbarrio=:idbarrio";
	        $criteria->params = array(':nombre'=> $id3,':idbarrio' => $id4 );	}


	    elseif($id){
	        $criteria->condition = "idestado_fisico = :idestado_fisico";
	        $criteria->params = array(':idestado_fisico' => $id);	}
	    elseif($id2){
	        $criteria->condition = "idmoneda = :idmoneda";
	        $criteria->params = array(':idmoneda' => $id2);	    }
	    elseif($id3){
	        $criteria->condition = "nombre ~*:nombre";
	        $criteria->params = array(':nombre'=> $id3);	    }
	    elseif($id4){
	        $criteria->condition = "idbarrio = :idbarrio";
	        $criteria->params = array(':idbarrio' => $id4);	    }

	    else{
            $criteria->condition = "idestado_fisico = :idestado_fisico or idmoneda = :idmoneda or nombre ~*:nombre";
	        $criteria->params = array(':idestado_fisico' => $id ?: 0, ':idmoneda' => $id2 ?:0, ':nombre' => $id ?: 0);
	    }

	     return $criteria;
    }

}
 