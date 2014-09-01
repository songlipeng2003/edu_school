<?php
Yii::setPathOfAlias('vendor', dirname(__FILE__) . DIRECTORY_SEPARATOR . '../../vendor');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	'language'=>'zh_CN',

	// preloading 'log' component
	'preload'=>array(
		'log',
		//'booster'
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'edu',
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=>array(
                'application.gii',
            ),
		),
		'admin'
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=edu_school',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'enableProfiling'=>true,
        	'enableParamLogging'=>true,
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
	            array(
	                'class'=>'vendor.malyshev.yii-debug-toolbar.YiiDebugToolbarRoute',
	                'ipFilters'=>array('127.0.0.1'),
	            ),
			),
		),
		'booster' => array(
		    'class' => 'vendor.clevertech.yii-booster.src.components.Booster',
		),
		'cache'=>array(
            'class'=>'system.caching.CFileCache',
        ),
		'settings'=>array(
	        'class'                 => 'application.extensions.settings.CmsSettings',
	        'cacheComponentId'  => 'cache',
	        'cacheId'           => 'global_website_settings',
	        'cacheTime'         => 84000,
	        'tableName'     => 'settings',
	        'dbComponentId'     => 'db',
	        'createTable'       => true,
	        'dbEngine'      => 'InnoDB',
        ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);