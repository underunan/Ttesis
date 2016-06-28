<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Tienda_tesis',
	'theme'=>'classic',
	// preloading 'log' component
	'preload'=>array('log','booster'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
        'application.components.*',
	    'application.modules.user.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
	),

	'modules'=>array(

		'user'=>array(
            # encrypting method (php hash function)
            'hash' => 'md5',

            # send activation email> Usado por lo general para validar la cuenta de usuarios via email y para recuperar la contrase;a cuando sea necesario, por defecto en false.
            'sendActivationMail' => false,

            # allow access for non-activated users
            'loginNotActiv' => false,

            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => true,

            # automatically login from registration> Despues de registrarse automaticamente el usuario accede a su cuenta
            'autoLogin' => true,

            # registration path
            'registrationUrl' => array('/user/registration'),

            # recovery password path
            'recoveryUrl' => array('/user/recovery'),

            # login form path
            'loginUrl' => array('/user/login'),

            # page after login
            'returnUrl' => array('/user/profile'),

            # page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),

        	// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1'),
			'ipFilters'=>array('*','::1'),
			'generatorPaths'=>array('xt.YiiBooster.src.components.gii'),
		),
	),

	// application components
	'components'=>array(
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
		////
		    //'urlFormat'=>'path',
			'showScriptName'=>false,
			'urlSuffix'=>'.aspx',
		    'caseSensitive'=>false,
			'rules'=>array(

				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),
        //Llama directamente al archivo database.php en donde esta la cadena de coneccio a la db de la applicacion.applicacion

        //User array queda inutilizado despues de la integracion de Yii User module
		'user'=>array(
			// enable cookie-based authentication
			'class' => 'WebUser',
            'allowAutoLogin'=>true,
            'loginUrl' => array('/user/login'),
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
		'booster'=>array(
                'class'=>'ext.YiiBooster.src.components.Booster',
                'responsiveCss'=>true,
		    ),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@gmail.com',
	),
);
