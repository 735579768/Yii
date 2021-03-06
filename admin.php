<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev'); //prod,dev

define('APP_PATH', './app');
//应用名字
define('APP_NAME', 'backend');
define('SITE_ROOT', str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT'])); //站点根目录
require './vendor/autoload.php';
require './vendor/yiisoft/yii2/Yii.php';
require APP_PATH . '/common/config/bootstrap.php';
require APP_PATH . '/' . APP_NAME . '/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
	require (APP_PATH . '/common/config/main.php'),
	require (APP_PATH . '/common/config/main-local.php'),
	require (APP_PATH . '/' . APP_NAME . '/config/main.php'),
	require (APP_PATH . '/' . APP_NAME . '/config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
