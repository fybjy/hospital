<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:16:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>铜梁妇幼保健院</title>

    <meta name="keywords" content="铜梁妇幼保健院">
    <meta name="description" content="铜梁妇幼保健院">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="http://www.123.com/hospital/public/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="http://www.123.com/hospital/public/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="http://www.123.com/hospital/public/css/animate.min.css" rel="stylesheet">
    <link href="http://www.123.com/hospital/public/css/style.min862f.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray


-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="http://www.123.com/hospital/public/img/profile_small.jpg" /></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">铜梁妇幼保健院</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <!--<li><a class="J_menuItem" href="form_avatar.html">修改头像</a>-->
                            <!--</li>-->
                            <!--<li><a class="J_menuItem" href="profile.html">个人资料</a>-->
                            <!--</li>-->
                            <!--<li><a class="J_menuItem" href="contacts.html">联系我们</a>-->
                            <!--</li>-->
                            <!--<li><a class="J_menuItem" href="mailbox.html">信箱</a>-->
                            <!--</li>-->
                            <!--<li class="divider"></li>-->
                            <li><a href="login.html">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">H+
                    </div>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-medkit"></i>
                        <span class="nav-label">医院介绍</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('brief');?>" data-index="0">医院简介</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo U('table');?>">来院导航</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo U('come');?>">院内导诊</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo U('news');?>">最新动态</a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a class="J_menuItem" href="<?php echo U('admin_user');?>"><i class="fa fa-user"></i> <span class="nav-label">账号管理</span></a>
                </li>
                <li>
                    <a class="J_menuItem" href="<?php echo U('admin_user');?>"><i class="fa fa-plus-square"></i> <span class="nav-label">健康宣教</span></a>
                </li>
                <li>
                    <a class="J_menuItem" href="<?php echo U('admin_user');?>"><i class="fa fa-paper-plane-o"></i> <span class="nav-label">科室导览</span></a>
                </li>
                <li>
                    <a class="J_menuItem" href="<?php echo U('admin_user');?>"><i class="fa  fa-home"></i> <span class="nav-label">主页</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <!--<form role="search" class="navbar-form-custom" method="post" action="http://www.zi-han.net/theme/hplus/search_results.html">-->
                        <!--<div class="form-group">-->
                            <!--<input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">-->
                        <!--</div>-->
                    <!--</form>-->
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="hidden-xs">
                        <a href="brief.html" class="J_menuItem" data-index="0"><i class="fa fa fa-home"></i> 欢迎来到妇幼保健院后台管理</a>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a class="right-sidebar-toggle" aria-expanded="false">
                            <i class="fa fa-tasks"></i> 退出
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="<?php echo U('index');?>">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="login.html" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo U('right');?>" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
        <!--<div class="footer">-->
            <!--<div class="pull-right">&copy; 2014-2015 <a href="http://www.zi-han.net/" target="_blank">zihan's blog</a>-->
            <!--</div>-->
        <!--</div>-->
    </div>
    <!--右侧部分结束-->
    <!--右侧边栏开始-->
    <div id="right-sidebar">
        <div class="sidebar-container">

        </div>
    </div>
    <!--右侧边栏结束-->
    <!--mini聊天窗口开始-->
</div>
<script src="http://www.123.com/hospital/public/js/jquery.min.js?v=2.1.4"></script>
<script src="http://www.123.com/hospital/public/js/bootstrap.min.js?v=3.3.6"></script>
<script src="http://www.123.com/hospital/public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="http://www.123.com/hospital/public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="http://www.123.com/hospital/public/js/plugins/layer/layer.min.js"></script>
<script src="http://www.123.com/hospital/public/js/hplus.min.js?v=4.1.0"></script>
<script type="text/javascript" src="http://www.123.com/hospital/public/js/contabs.min.js"></script>
<script src="http://www.123.com/hospital/public/js/plugins/pace/pace.min.js"></script>
</body>

</html>