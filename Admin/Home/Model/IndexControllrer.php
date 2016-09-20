<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/19
 * Time: 0:38
 */

namespace Home\Model;

use Think\Model;

class IndexControllrer  extends Model{

    protected $db = array(
        'db_type'  => 'mysql',
        'db_user'  => 'root',
        'db_pwd'   => 'root',
        'db_host'  => 'localhost',
        'db_port'  => '3306',
        'db_name'  => 'thinkphp',
        'db_charset' =>    'utf8',
    );
    protected $connection = 'DB_CONFIG1';
}