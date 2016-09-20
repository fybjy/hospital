<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/index_v4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:49 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 首页示例三</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">

    <!-- Morris -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.min862f.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg sidebar-content">

    <div class="sidebard-panel">
        <div>
            <h4>消息 <span class="badge badge-info pull-right">16</span></h4>
            <div class="feed-element">
                <a href="index_3.html#" class="pull-left">
                    <img alt="image" class="img-circle" src="img/a1.jpg">
                </a>
                <div class="media-body">
                    跑步呐，最重要的是要有动力
                    <br>
                    <small class="text-muted">今天 4:21</small>
                </div>
            </div>
            <div class="feed-element">
                <a href="index_3.html#" class="pull-left">
                    <img alt="image" class="img-circle" src="img/a2.jpg">
                </a>
                <div class="media-body">
                    V信已经提前恢复，也算是个好消息吧
                    <br>
                    <small class="text-muted">昨天 2:45</small>
                </div>
            </div>
            <div class="feed-element">
                <a href="index_3.html#" class="pull-left">
                    <img alt="image" class="img-circle" src="img/a3.jpg">
                </a>
                <div class="media-body">
                    是你对不对
                    <br>
                    <small class="text-muted">昨天 1:10</small>
                </div>
            </div>
            <div class="feed-element">
                <a href="index_3.html#" class="pull-left">
                    <img alt="image" class="img-circle" src="img/a4.jpg">
                </a>
                <div class="media-body">
                    发布了一篇文章
                    <br>
                    <small class="text-muted">星期一 8:37</small>
                </div>
            </div>
        </div>
        <div class="m-t-md">
            <h4>统计</h4>
            <p>
                上半年数据统计
            </p>
            <div class="row m-t-sm">
                <div class="col-md-6">
                    <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                    <h5><strong>169</strong> 文章</h5>
                </div>
                <div class="col-md-6">
                    <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                    <h5><strong>28</strong> 订单</h5>
                </div>
            </div>
        </div>
        <div class="m-t-md">
            <h4>讨论</h4>
            <div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge badge-primary">16</span> 一般话题
                    </li>
                    <li class="list-group-item ">
                        <span class="badge badge-info">12</span> 热门话题
                    </li>
                    <li class="list-group-item">
                        <span class="badge badge-warning">7</span> 最新话题
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div>
                            <span class="pull-right text-right">
                                        <small>在过去销售额最高的地区： <strong>广东</strong></small>
                                            <br/>
                                            共销售：162,862
                                        </span>
                            <h1 class="m-b-xs">$ 50,992</h1>
                            <h3 class="font-bold no-margins">
                                            半年销售额
                                        </h3>
                            <small>市场部</small>
                        </div>

                        <div class="flot-chart" style="height: 140px">
                            <div class="flot-chart-content" id="flot-chart3"></div>
                        </div>

                        <div class="m-t-md">
                            <small class="pull-right">
                                        <i class="fa fa-clock-o"> </i>
                                        最后更新：2014.11.11
                                    </small>
                            <small>
                                       <strong>销售分析：</strong> 该值已随时间发生变化，上个月达到的水平超过50,000元。
                                   </small>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">今天</span>
                        <h5>访客</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">22 285,400</h1>
                        <div class="stat-percent font-bold text-navy">20% <i class="fa fa-level-up"></i>
                        </div>
                        <small>新订单</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">月</span>
                        <h5>订单</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">60 420,600</h1>
                        <div class="stat-percent font-bold text-info">40% <i class="fa fa-level-up"></i>
                        </div>
                        <small>新订单</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-warning pull-right">年</span>
                        <h5>收入</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">$ 120 430,800</h1>
                        <div class="stat-percent font-bold text-warning">16% <i class="fa fa-level-up"></i>
                        </div>
                        <small>新订单</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>数据报告</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="index_3.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="index_3.html#">选项1</a>
                                </li>
                                <li><a href="index_3.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content ibox-heading">
                        <h3>股价上涨
                            <div class="stat-percent text-navy">34% <i class="fa fa-level-up"></i></div>
                        </h3>
                        <small><i class="fa fa-stack-exchange"></i> 上一季度的最新数据</small>
                    </div>
                    <div class="ibox-content">
                        <div>

                            <div class="pull-right text-right">

                                <span class="bar_dashboard">5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span>
                                <br/>
                                <small class="font-bold">$ 20 054.43</small>
                            </div>
                            <h4>广东地区的数据报告
                                    <br/>
                                    <small class="m-r"><a href="graph_flot.html"> 获取最新股票价格 </a> </small>
                                </h4>
                        </div>
                    </div>
                </div>
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>最新评论</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="index_3.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="index_3.html#">选项1</a>
                                </li>
                                <li><a href="index_3.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content no-padding">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p><a class="text-info" href="index_3.html#">@星探子</a> 我的目标就是想做一个跟你一样有责任感，有思想，有深度的新闻媒体从业人</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 1分钟前</small>
                            </li>
                            <li class="list-group-item">
                                <p><a class="text-info" href="index_3.html#">@小七是</a> 其实自己一半的大学生活也基本上是和新闻为伍了～一篇小小的稿子也许只有5、6百字，可以却可以写1、2个小时。一场会议也许3个小时，睡一觉就过去了，可是却要端着相机站3个小时，害怕错过一个经典的镜头。新闻人，更辛苦。</p>
                                <div class="text-center m">
                                    <span id="sparkline8"></span>
                                </div>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 2天前</small>
                            </li>
                            <li class="list-group-item">
                                <p><a class="text-info" href="index_3.html#">@镜子mini</a> 大一邵老师说记者是高危职业，防火防盗防记者；大二时老师说嫁人莫嫁记者郎。可他们依然坚守岗位，培养新闻学子。现在大三，毕业了也会从事新闻工作。有时候坚持一件事情，并不是因为这样做了会改变什么，而是坚信，这样做是对的。</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 2分钟前</small>
                            </li>
                            <li class="list-group-item ">
                                <p><a class="text-info" href="index_3.html#">@爱nimen</a> 记得费希特在《论学者的使命》中说：“你们都是最优秀的知识分子。如果最优秀的分子丧失了自己的力量，那又用什么去感召呢？如果出类拔萃的人都腐化了，那还到哪里去寻找道德善良呢？”</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 1小时前</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>时间轴</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="index_3.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="index_3.html#">选项1</a>
                                </li>
                                <li><a href="index_3.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content timeline">

                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i> 6:00
                                    <br>
                                    <small class="text-navy">2 小时前</small>
                                </div>
                                <div class="col-xs-7 content no-top-border">
                                    <p class="m-b-xs"><strong>服务器已彻底崩溃</strong>
                                    </p>

                                    <p>还未检查出错误</p>

                                    <p><span data-diameter="40" class="updating-chart" style="display: none;">9,6,5,9,4,7,3,2,9,8,7,4,5,1,2,9,5,4,7,2,7,7,3,5,2,2,10,8,2,8,4,4,4,9,1,7,4</span>
                                        <svg class="peity" height="16" width="64">
                                            <polygon fill="#1ab394" points="0 15 0 2 1.7777777777777777 6.5 3.5555555555555554 8 5.333333333333333 2 7.111111111111111 9.5 8.88888888888889 5 10.666666666666666 11 12.444444444444443 12.5 14.222222222222221 2 16 3.5 17.77777777777778 5 19.555555555555554 9.5 21.333333333333332 8 23.11111111111111 14 24.888888888888886 12.5 26.666666666666664 2 28.444444444444443 8 30.22222222222222 9.5 32 5 33.77777777777778 12.5 35.55555555555556 5 37.33333333333333 5 39.11111111111111 11 40.888888888888886 8 42.666666666666664 12.5 44.44444444444444 12.5 46.22222222222222 0.5 48 3.5 49.77777777777777 12.5 51.55555555555555 3.5 53.33333333333333 9.5 55.11111111111111 9.5 56.888888888888886 9.5 58.666666666666664 2 60.44444444444444 14 62.22222222222222 5 64 9.5 64 15"></polygon>
                                            <polyline fill="transparent" points="0 2 1.7777777777777777 6.5 3.5555555555555554 8 5.333333333333333 2 7.111111111111111 9.5 8.88888888888889 5 10.666666666666666 11 12.444444444444443 12.5 14.222222222222221 2 16 3.5 17.77777777777778 5 19.555555555555554 9.5 21.333333333333332 8 23.11111111111111 14 24.888888888888886 12.5 26.666666666666664 2 28.444444444444443 8 30.22222222222222 9.5 32 5 33.77777777777778 12.5 35.55555555555556 5 37.33333333333333 5 39.11111111111111 11 40.888888888888886 8 42.666666666666664 12.5 44.44444444444444 12.5 46.22222222222222 0.5 48 3.5 49.77777777777777 12.5 51.55555555555555 3.5 53.33333333333333 9.5 55.11111111111111 9.5 56.888888888888886 9.5 58.666666666666664 2 60.44444444444444 14 62.22222222222222 5 64 9.5" stroke="#169c81" stroke-width="1" stroke-linecap="square"></polyline>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-file-text"></i> 7:00
                                    <br>
                                    <small class="text-navy">3小时前</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>修复了0.5个bug</strong>
                                    </p>
                                    <p>重启服务</p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-coffee"></i> 8:00
                                    <br>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>喝水、上厕所、做测试</strong>
                                    </p>
                                    <p>
                                        喝了4杯水，上了3次厕所，控制台输出出2324个错误，神啊，带我走吧
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-phone"></i> 11:00
                                    <br>
                                    <small class="text-navy">21小时前</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>项目经理打电话来了</strong>
                                    </p>
                                    <p>
                                        TMD，项目经理居然还没有起床！！！
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-user-md"></i> 09:00
                                    <br>
                                    <small>21小时前</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>开会</strong>
                                    </p>
                                    <p>
                                        开你妹的会，老子还有897894个bug没有修复
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-comments"></i> 12:50
                                    <br>
                                    <small class="text-navy">讨论</small>
                                </div>
                                <div class="col-xs-7 content">
                                    <p class="m-b-xs"><strong>…………</strong>
                                    </p>
                                    <p>
                                        又是操蛋的一天
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/curvedLines.js"></script>
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.min.js"></script>
    <script src="js/content.min.js?v=1.0.0"></script>
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/demo/sparkline-demo.min.js"></script>
    <script>
        $(document).ready(function(){$(".chart").easyPieChart({barColor:"#f8ac59",scaleLength:5,lineWidth:4,size:80});$(".chart2").easyPieChart({barColor:"#1c84c6",scaleLength:5,lineWidth:4,size:80});var d1=[[1262304000000,1],[1264982400000,100],[1267401600000,1],[1270080000000,200],[1272672000000,1],[1275350400000,100],[1277942400000,1],[1280620800000,300]];var d2=[[1262304000000,100],[1264982400000,1],[1267401600000,150],[1270080000000,1],[1272672000000,230],[1275350400000,1],[1277942400000,150],[1280620800000,10]];var data3=[{label:"Data 1",data:d1,color:"#23c6c8"},{label:"Data 2",data:d2,color:"#1ab394"}];$.plot($("#flot-chart3"),data3,{xaxis:{tickDecimals:0},series:{lines:{show:true,fill:true,fillColor:{colors:[{opacity:1},{opacity:1}]},},curvedLines:{active:true,fit:true,apply:true},points:{width:0.1,show:false},},grid:{show:false,borderWidth:0},legend:{show:false,}});var mapData={"US":298,"SA":200,"DE":220,"FR":540,"CN":120,"AU":760,"BR":550,"IN":200,"GB":120,};$("#world-map").vectorMap({map:"world_mill_en",backgroundColor:"transparent",regionStyle:{initial:{fill:"#e4e4e4","fill-opacity":0.9,stroke:"none","stroke-width":0,"stroke-opacity":0}},series:{regions:[{values:mapData,scale:["#1ab394","#22d6b1"],normalizeFunction:"polynomial"}]},})});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/index_v4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:50 GMT -->
</html>