<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use ZF\Util\Ajax;

class IndexController extends Controller {
    public function index(){
    }
    //院内导诊
    public function navigation(){
        $nav = new Model('come_to');
        $nav = $nav->select();
        $this->assign('nav',$nav);
        $this->display();
    }
    //最新动态
    public function news(){
        $news = new Model('news');
        $news = $news->select();
        $this->assign('news',$news);
        $this->display();
    }
    //医生列表
    public function hospitalIntro(){
        $list = new Model('hospital_profile');
        $hospital_list = $list->find();
//        print_r($hospital_list['tel']);
        $list = explode(',',$hospital_list['tel']);
        print_r($list);
        $this->assign('list',$list);
        $this->assign('hospital_list',$hospital_list);
        $this->display();
    }
    //详情
    public function doctorInfo(){
        $id = $_GET['id'];
        $list = new Model('hospital_list');
        $list = $list->where('id=id')->find();
        $this->assign('list',$list);
        $this->display();
    }
    //医生列表
    public function doctorlist(){
        //科室
        $ks = new Model('outpatient_department');
        $ks_list = $ks->select();
        $this->assign('list',$ks_list);
        $list = new Model('hospital_list');
        $list = $list->select();
        $this->assign('list_xq',$list);
        if(IS_POST){
            $id = I('post.id');
            $a_id['a_id'] = $id;
            $hospital = new Model('hospital_list');
            $list = $hospital->where($a_id)->select();
//            print_r($list);
                $this->ajaxReturn($list,'JSON');
        }
        $this->display();
    }
}