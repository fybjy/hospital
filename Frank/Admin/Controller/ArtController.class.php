<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;

use Think\Controller;
use Think\Model;
use Think\Template\Driver\Mobile;

class ArtController extends Controller
{
    //医生列表
    public function index()
    {
        $list = new Model("outpatient_department");
        $list = $list->select();
        $this->assign('list', $list);
        //医生列表信息
        $doctor = new Model("hospital_list");
        $doctor = $doctor->select();
        $this->assign('doctor',$doctor);
        if(IS_POST){
            $action = $_GET['action'];
            switch ($action) {
                case "delete":
                    $id = I('post.id');
                    $delete = new Model("hospital_list");
                    $delete_lete = $delete->delete($id);
                    if ($delete_lete) {
                        $this->ajaxReturn("ok");
                    } else {
                        $this->ajaxReturn("no");
                    }
                    break;
                case "option":
                    $id = I('post.id');
                    $option = new Model('hospital_list');
                    $selete = $option->where('a_id = $id')->select();
                    print_r($selete);
            }
        }
        $this->display();
    }

    //医生科室
    public function Company()
    {
        //医生科室
        $com = new Model("outpatient_department");
        $com = $com->select();
        $this->assign('com', $com);
        if (IS_POST) {
            $action = $_GET['action'];
            switch ($action) {
                case "delete":
                    $id = I('post.id');
                    $delete = new Model("outpatient_department");
                    $delete_lete = $delete->delete($id);
                    if ($delete_lete) {
                        $this->ajaxReturn("ok");
                    } else {
                        $this->ajaxReturn("no");
                    }
                    break;
                case "add":
                    $come_js = I('post.department');
                    $come_to_Add['department'] = $come_js;
                    $come_add = new Model("outpatient_department");
                    $conme = $come_add->add($come_to_Add);
//                    if($conme){
//                        $this->ajaxReturn('ok');
//                    }else{
//                        $this->ajaxReturn('no');
//                    }
                    break;
            }
        }
        $this->display();
    }
    //修改
    public function xiugai(){
        $id = $_GET['id'];
        $xiugai = new Model("outpatient_department");
        $xiu = $xiugai->where("id=$id")->find();
        $this->assign('xiu',$xiu);
        if(IS_POST){
            $action = $_GET['action'];
            $id = I('post.id');
            switch($action){
                case "save":
                    $department = I('post.department');
                    $xiu = new Model("outpatient_department");
                    $xiugai = array(
                        'department' => $department
                    );
                    $xiu_gai = $xiu->where("id=$id")->save($xiugai);
                    if($xiu_gai){
                        $this->ajaxReturn("ok");
                    }else{
                        $this->ajaxReturn("no");
                    }
            }
        }
        $this->display();
    }
    //医生列表
    public function doctor_list(){
        $list = new Model('outpatient_department');
        $list = $list->select();
        $this->assign('list',$list);
        if(IS_POST){
            $action = $_GET['action'];
            switch($action){
                case "add":
                    $id = I('post.');
                    $add['name'] = $id['name'];
                    $add['company'] = $id['company'];
                    $add['good_at'] = $id['good_at'];
                    $add['doctor_jj'] = $id['doctor_jj'];
                    $add['information'] = $id['information'];
                    $add['a_id'] = $id['id'];
                    $doctor_list = new Model('hospital_list');
                       $doc =  $doctor_list->add($add);//新增数据
                break;
            }
        }
        $this->display();
    }

}