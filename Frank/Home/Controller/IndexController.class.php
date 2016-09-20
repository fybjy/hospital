<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use ZF\Util\Ajax;

class IndexController extends Controller {
    public function index(){
     $list  = new Model('user');
        $list = $list->select();
        $this->assign("list",$list);
        $this->display();
    }
    public function login(){
        if(IS_POST){
          $username = I('post.user');
          $password = I('post.pass');
//            print_r($password);
            $where_user['username '] = $username;
            $where_user['password '] = "$password";
            $list = new Model('admin');
//            $list->where(['username'=>$username,'password'=>$password])->find();
                $use = $list->where($where_user)->select();
                if($use){
                    $this->ajaxReturn("登录成功");
//                    $this->redirect('index','',"swsw");
                }else{
                    $this->ajaxReturn("账号密码错误");
                }


    }
        $this->display();
    }
    public function xc(){
    $this->display();
    }
}