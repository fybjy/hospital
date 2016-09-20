<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller {
    public function index(){
        echo "333333";
    }
    public function conversation(){
        $user = new Model('User','think_','mysql://root:root@www.123.com/thinkphp');
        var_dump($user->select());
    }
}