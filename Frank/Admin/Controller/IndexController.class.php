<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
use Think\Upload;
class IndexController extends Controller {
    //医院简介
    public function brief(){
        $this->checkLogin();
        $doctor = new Model("Hospital_profile");
        $doctor_jy = $doctor->select();
        $this->assign("doctor",$doctor_jy);
        if(IS_POST){
            $action = $_GET['action'];
            switch($action){
                case "delete":
                    $id = I('post.id');
                    $delete = new Model('hospital_profile');
                    $delete_de = $delete->delete($id);
                    if($delete_de){
                        $this->ajaxReturn('ok');
                    }else{
                        $this->ajaxReturn('no');
                    }
            }
        }
        $this->display();
    }

    public function AddForm(){
        if(IS_POST){
        $name = I('post.name');
        $file_upload = I('post.file_upload');

        }
        $this->display();
    }
    //查看
    public function see(){
        $id = $_GET['id'];
        $see = new Model("Hospital_profile");
        $where['id'] = $id;
        $see = $see->where($where)->find();
        $this->assign('see',$see);
        //修改
        if(IS_POST){
            $action = $_GET['action'];
            switch($action){
                case "sava":
                    $id = I('post.id');
                    $title = I('post.title');
                    $tel = I('post.tel');
                    $address = I('post.address');
                    $mz_time = I('post.mz_time');
                    $winter_time = I('post.winter_time');
                    $summer_time = I('post.summer_time');
                    $Inpatient = I('post.Inpatient');
                    $charge = I('post.charge');
                    $introduction = I('post.introduction');
                    $see_e = array(
                        'title' => $title,
                        'tel' => $tel,
                        'address' => $address,
                        'mz_time' => $mz_time,
                        'winter_time' => $winter_time,
                        'summer_time' => $summer_time,
                        'Inpatient' => $Inpatient,
                        'charge' => $charge,
                        'introduction' => $introduction,
                    );
                    $see = new Model("Hospital_profile");
                    $seee = $see->where("id=$id")->save($see_e);
                    if($seee){
                        $this->ajaxReturn("ok");
                    }
                    break;

            }
        }
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
                session_start();
               session('user_admin',$use_se);
                //如果超过多长时间没有再写 登陆失效时间
                session('login_session',time()+10800);
                $this->ajaxReturn("登录成功");
            }else{
                $this->ajaxReturn("账号密码错误");
            }
        }

        $this->display();
    }

    /**
     * @return bool是否登录验证
     */
    private function checkLogin(){
        $data =session('user_admin');
//        $data =session(null);
        if(session('login_session') < time()){
            //清除掉判断是否登陆的session
            $data =session(null);
            //跳转到登陆页面去
            redirect("http://www.123.com/hospital/admin/index/login");
        }else{
            //重新更新session时间
            session('login_session',time()+10800);
        }
        if(empty($data)){
            redirect("http://www.123.com/hospital/admin/index/login");
            return false;
        }else{
            return true;
        }
    }
    //首页右边
    public function right(){
        $this->checkLogin();
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
    //图片上传
    public function upload(){
        $upload = new Upload();//实例上传对象
        $upload->maxSize = 3500000;//限制大小
        $upload->savePath = "./"; //上传路径
        $upload->exts = array("jpg","jpeg","gif","png"); //可以上传的文件后缀
        $info = $upload->upload(); //执行对象的上传方法
        if($info){
            $this->success("上传成功。");  //成功函数
        }else{
            $this->error($upload->getError()); //错误提示
        }
    }
}