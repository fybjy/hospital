<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use TP\Fran\Home\Model\IndexControoler;
class IndexController extends Controller {
    public function index(){
//        $user = new Model('Php','think','mysql://root:root@www.123.com/thinkphp');
//        var_dump($user->select());
////        $user = new  UserModel();
//        $aa = qwe;
//   $a ="hello word $aa";
        $b = 'hello  $aa';
//        echo strlen($b);
//        if(strlen($aa)>=3){
//            echo "哈哈";
//        }else{
//            echo "shabi ";
//        }
//        $sty = $aa[1];
//        if(strlen($sty) == 1){
//         echo "WWW";
//        }else{
//            echo "@222";
//        }
    //二维数组
//        $array = array(
//            "今天天气不错哦"=>"今天天真好,今天好热,one fine day",
//            "测"=>"good luck，祝你好运"
//        );
//        print_r($array);
//        //switch格式
//        $swich = "one fine day";
//        switch($swich){
//            case "one fine day":
//                $day = "one fin day";
//                break;
//            case "one":
//                $day = "one two three four five";
//                break;
//            default:
//                $day = "hello word";
//        }
//        print($day);
////        print_r($array);
   $db = array(
            'db_type'  => 'mysql',
            'db_user'  => 'root',
            'db_pwd'   => 'root',
            'db_host'  => 'http://www.123.com/tp/PHPmyadmin0',
            'db_port'  => '3306',
            'db_name'  => 'thinkphp',
            'db_charset' =>    'utf8',
        );
        echo "11111";
        $this->display();
    }
    public function dede(){
        echo xiong;
        $this->display();
    }
}