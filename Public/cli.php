<?php
/**
 * 中恒玖联专用PHP框架
 * User: hypo
 * Date: 14-6-27
 * Time: 上午10:35
 */

define('DEBUG', 2);
define('APP_ENV', 'test');
define('PUBLIC_PATH', __DIR__ . '/');
define('APP_PATH', dirname(PUBLIC_PATH) . '/');
define('APP_TOP_NAMESPACE', 'App');
define('BIND_MODULE', 'Cli');

require PUBLIC_PATH . '../../zf/framework/src/bootstrap.php';

ZF\Core\App::setInstance(new ZF\Mode\Cli\App);
ZF\Core\App::instance()->setRouter(ZF\Core\Router::instance([
	'default_module' => 'Index',
    'default_action' => 'index'
]));
ZF\Core\App::instance()->init();
ZF\Core\App::instance()->run();