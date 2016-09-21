<?php
namespace Admin\Controller;
use Think\Controller;
abstract class Base extends Controller {
    protected function _init() {
        $this->_isLogin();
    }
    /**
     * 检查是否登陆
     *
     */
    protected function _isLogin(){
        //检测登陆session是否存在
        if(session('login_session')){
            //如果设置的时间小于当前的时间退出重新登陆
            if(session('login_session') < time()){
                //清除掉判断是否登陆的session
                session(null);
                //跳转到登陆页面去
                redirect("http://www.123.com/hospital/admin/index/login");
            }else{
                //重新更新session时间
                session('login_session',time()+10800);
            }
        }
    }

}