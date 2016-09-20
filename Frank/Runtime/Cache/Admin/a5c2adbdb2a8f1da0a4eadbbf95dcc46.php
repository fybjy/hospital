<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/table_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:01 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>医院简介</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="http://www.123.com/hospital/public/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="http://www.123.com/hospital/public/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="http://www.123.com/hospital/public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="http://www.123.com/hospital/public/css/animate.min.css" rel="stylesheet">
    <link href="http://www.123.com/hospital/public/css/style.min862f.css?v=4.1.0" rel="stylesheet">

</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div class="">
                        <a data-toggle="modal" class="btn btn-primary" href="form_basic.html#modal-form">添加数据</a>
                    </div>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>科室</th>
                            <th>位置</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($come)): foreach($come as $key=>$vo): ?><tr>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["Department"]); ?></td>
                                <td><?php echo ($vo["position"]); ?></td>
                                <td><?php echo ($vo["time"]); ?></td>
                                <td>
                                   <a data-toggle="modal" onclick="detele(<?php echo ($vo["id"]); ?>)" class="btn btn-primary replace">
                                        删除
                                    </a>
                                </td>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------修改---------------------------------------------------->
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><div id="form<?php echo ($list["id"]); ?>" class="modal fade" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                <h3 class="m-t-none m-b">修改</h3>
                                <form role="form">
                                    <div class="form-group">
                                        <label>姓名：</label>
                                        <input type="email" id="up_name" value="<?php echo ($list["name"]); ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>性别：</label>
                                        <input type="email" id="up_sex" value="<?php echo ($list["sex"]); ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>年龄：</label>
                                        <input type="email" id="up_age" value="<?php echo ($list["age"]); ?>" class="form-control">
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong
                                                style="text-align: center" onclick="Tj(<?php echo ($list["id"]); ?>)"> 修改</strong>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php endforeach; endif; ?>
    <!-------------------------------------------增加数据------------------------------------------->
    <div id="modal-form" class="modal fade eee" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            <form role="form">
                                <div class="form-group">
                                    <label>科室：</label>
                                    <input type="test" id="Department" placeholder="请输入科室" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>位置：</label>
                                    <input type="test" id="position" placeholder="请输入位置" class="form-control">
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" id="submit"><strong
                                            style="text-align: center">提交</strong>
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






</div>
<script src="http://www.123.com/hospital/public/js/jquery.min.js?v=2.1.4"></script>
<script src="http://www.123.com/hospital/public/js/bootstrap.min.js?v=3.3.6"></script>
<script src="http://www.123.com/hospital/public/js/content.min.js?v=1.0.0"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
<script src="http://static.weiwubao.com/asset/lib/js/ibox.js"></script>
<script>
    //  $(document).on("click","#sublit",function(){
    //
    //  })
    $("#submit").click(function () {
        var Department = $("#Department").val();
        var position = $("#position").val();
        if(Department==""){
            $.iBox.alert('请输入')
            $("#Department").focus();
            return false;
        }
        if(position==""){
            $.iBox.alert('请输入')
            $("#position").focus();
            return false;
        }
        $.ajax({
            url: "<?php echo U(come);?>?action=add     ",
            dataType: "json",
            type: "post",
            data: {
                Department: Department,
                position: position,
            },
            success: function (data) {
//                if (data.status == "ok") {
//                    alert("121212");
//                }
            }
        })
    })
    function detele(id) {
        $.ajax({
            url: "<?php echo U(come);?>?action=delete",
            dataType: "json",
            type: "post",
            data: {
                id: id,
            },
            success: function (data) {
                if(data == "ok"){
                    window.location.reload();
                }
            }
        })
    }
    //修改
    function Tj(id) {
        var name = $("#up_name").val();
        var sex = $("#up_sex").val();
        var age = $("#up_age").val();
        $.ajax({
            url: "<?php echo U(table);?>?action=three",
            dataType: "json",
            type: "post",
            data: {
                id: id,
                name: name,
                sex: sex,
                age: age,
            },
            success: function (json) {

            }
        })
    }
</script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/table_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:01 GMT -->
</html>