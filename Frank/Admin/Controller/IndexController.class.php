<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
use ZF\Service\NewCoupon;

class IndexController extends Controller {
    public function action(){
     $wx = "{\"access_token\":\"ACCESS_TOKEN\",\"expires_in\":7200}";
        print_r(json_decode($wx,true));
       $this->display();
    }
    public function conversation(){
        $user = new Model('User','think_','mysql://root:root@www.123.com/thinkphp');
        var_dump($user->select());
    }
    //医院简介
    public function brief(){
        $doctor = new Model("Hospital_profile");
        $doctor_jy = $doctor->select();
        $this->assign("doctor",$doctor_jy);
        $this->display();
    }
    //来院到诊
    public function come(){
        $come = new Model("come_to");
        $come_to = $come->select();
        $this->assign('come',$come_to);
        if(IS_POST){
            $action = $_GET['action'];
            switch($action){
                case "add":
                    $come_js = I('post.');
                    $come_to_Add['Department'] = $come_js['Department'];
                    $come_to_Add['position'] = $come_js['position'];
                    $come_to_Add['time'] = date('Y-m-d H:i:s');
                    $come_add = new Model("come_to");
                    $conme = $come_add->add($come_to_Add);
                    break;
                case "delete":
                    $id = I('post.id');
                    $delete = new Model("come_to");
                    $delete_lete = $delete->delete($id);
                    if($delete_lete){
                        $this->ajaxReturn("ok");
                    }else{
                        $this->ajaxReturn("no");
                    }
            }
        }
        $this->display();
    }
    public function table(){
        $list = new Model("Frank");
        $list = $list->select();
        $this->assign("list",$list);
        $one = new Model("Frank");
        $one = $one->find();
        $this->assign("one",$one);
        if(IS_POST){
         $action =  $_GET['action'];
            switch ($action){
                //添加数据
                case "one" :
                    $name = I('post.name');
                    $sex = I("post.sex");
                    $age = I("post.age");
                    $add['name'] = $name;
                    $add['sex'] = $sex;
                    $add['age'] = $age;
                    $list = new Model("Frank");
                    $list = $list->add($add);//增加数据ADD
                    if($list){
                        $this->ajaxReturn("ok");
                    }else{
                        $this->ajaxReturn("NO");
                    }
                    break;
                //删除
                case "two":
                    $id= I('post.id');
                    $detele = new Model("Frank");
                    $detele = $detele->delete($id);
                    if($detele){
                        $this->ajaxReturn("ok");
                    }else{
                        $this->ajaxReturn("NO");
                    }
                    break;
                //修改
                case "three":
                    $id = I("post.id");
                    $name = I('post.name');
                    $sex = I('post.sex');
                    $age = I("post.age");
                    $arry =array(
                        'name'=>$name,
                        'sex' =>$sex,
                        'age' =>$age,
                    );
                    $save = new Model('Frank');
                    $save->where("id=$id")->save($arry);
                    break;
            }

         }
        $this->display();
    }
    public function basic(){
        $this->display();
    }
    //账号管理
    public function admin_user(){
        $user = new Model('user');
        $user = $user->select();
        $this->assign('user',$user);
        if(IS_POST){
            $action = $_GET['action'];
           switch($action){
               case "add":
                   $username = I('post.username');
                   $password = I('post.password');
                   $time = date("Y-m-d H:i:s");
                   $user['username'] = $username;
                   $user['password'] = md5($password);
                   $user['time'] = $time;
                   $add_user = new Model('user');
                   $add_user = $add_user->add($user);
                   if($add_user){
                       $this->ajaxReturn('ok');
                   }else{
                       $this->ajaxReturn('ok');
                   }
                   break;
               case "delete":
                   $id = I('post.id');
                   $detele = new Model("user");
                   $detele = $detele->delete($id);
                   break;
           }
        }
        $this->display();
    }
    //登录
    public function login(){
        if(IS_POST){
            $user = I('post.username');
            $password = I('post.password');
            $where['username'] = $user;
            $where['password'] = $password;
            $use = new Model('user');
            $use_se = $use->where($where)->find();
            if($use_se){
                $this->ajaxReturn("登录成功");
            }else{
                $this->ajaxReturn("账号密码错误");
            }
        }
        $this->display();
    }
    //首页右边
    public function right(){
        $this->display();
    }
    //最新动态
    public function news(){
        $new = new Model("news");
        $news = $new->select();
        $this->assign('news',$news);
        if(IS_POST){
            $action = $_GET['action'];
            switch($action){
//                case "add":
//                    $username = I('post.username');
//                    $password = I('post.password');
//                    $time = date("Y-m-d H:i:s");
//                    $user['username'] = $username;
//                    $user['password'] = md5($password);
//                    $user['time'] = $time;
//                    $add_user = new Model('user');
//                    $add_user = $add_user->add($user);
//                    if($add_user){
//                        $this->ajaxReturn('ok');
//                    }else{
//                        $this->ajaxReturn('ok');
//                    }
//                    break;
                case "delete":
                    $id = I('post.id');
                    $detele = new Model("news");
                    $detele = $detele->delete($id);
                    if($detele){
                        $this->ajaxReturn("ok");
                    }else{
                        $this->ajaxReturn("no");
                    }
                    break;
            }
        }
        $this->display();
    }
}