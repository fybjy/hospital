<?php

/*                   _ooOoo_
 *                  o8888888o
 *                  88" . "88
 *                  (| -_- |)
 *                  O\  =  /O
 *               ____/`---'\____
 *             .'  \\|     |//  `.
 *            /  \\|||  :  |||//  \
 *           /  _||||| -:- |||||-  \
 *           |   | \\\  -  /// |   |
 *           | \_|  ''\---/''  |_/ |
 *           \  .-\__  '-'  ___/-. /
 *          __'. .'  /--.--\  `. .' __
 *      ."" '<  `.___\_<|>_/___.'  >'"".
 *     | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *     \  \ `-.   \_ __\ /__ _/   .-` /  /
 * ======`-.____`-.___\_____/___.-`____.-'======
 *                   `=---='
 * ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
 *                佛祖保佑       永无BUG
 *
 * */
/**
 * 微官网
 * User: hypo
 * Date: 14-7-17
 * Time: 下午6:00
 */

define('PUBLIC_PATH', __DIR__ . '/');
define('APP_ENV', 'dev');
define('APP_PATH', dirname(PUBLIC_PATH) . '/');
define('APP_TOP_NAMESPACE', 'App');
define('APP_ASSET_SERVER', 'http://static.weiwubao.com');
define('APP_ASSET_PATH', '/');
define('APP_ATTACHMENT_PATH', 'data/attachment');

require  PUBLIC_PATH . '../../zf/framework/src/bootstrap.php';

ZF\Core\App::setInstance(new ZF\Mode\Web\App());
ZF\Core\App::instance()->setRouter(ZF\Core\Router::instance(
    [
    'allowed_modules'    => ['Site' /* 顾客前台 */, 'Common' /* 通用功能 */, 'Admin'/*后台管理*/],
    'default_module'     => 'Site',
    'default_controller' => 'Index',
    'default_action'     => 'Index',
]
));

ZF\Core\App::instance()->init();
ZF\Core\App::instance()->run();
