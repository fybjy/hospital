/**
 * Created by xingke on 2016/4/28.
 */

// //上传函数
// function swapUpload(name, url){
//     if(!url){
//         url = '/common/upload';
//     }
//     $("body").append("<style>  #uploadform{ display: none;}</style>");
//     ajaxupload('cover', 'image', url, function (json) {
//         if(!json || json.file != 'error'){
//             //var showimg = json.file.remote_size_320x320;
//             var path = json.file.path;   //原始图片路径
//             //$(".photo-box").show();
//             //$(".up_img").attr("src",showimg);
//             $("input[name="+name+"]").val(path);
//             toastr.success(json.msg, "恭喜上传成功！");
//             toastr_tip();
//         }
//     })
// }
//
// function ajaxupload(container, type, url, callback) {
//     if (!type) {
//         toastr.error(json.msg, "没有定义文件类型！");
//         toastr_tip();
//         return false;
//     }
//     window.ajaxUploadCallback = callback;
//     var html = "";
//     html += "<form id='uploadform' method='post' action='"+url+"' target='callback' enctype='multipart/form-data' >";
//     html += "<div id='upload' class='ajax_upload'>";
//     html += "<div class='file-content'><input type='file' name='file' onchange='$(\"#ajaxupload_submit\").click();ajaxupload_start()' id='file_select' title='选择文件上传'/></div>";
//     html += "<input name='fileType' type='hidden' value=\"" + type + "\"/>";
//     html += "<input name='ajaxupload_submit' type='submit' id='ajaxupload_submit' style='display:none;'/>";
//     html += "<div style='display:none;'><iframe name='callback' id='callback' onload='ajaxUploadFrameOnload(\"" + container + "\")' style='display: none;'></iframe></div>";
//     html += "</div>";
//     html += "</form>";
//     //
//     if ($("#uploadform").length == 0) {
//         $("body").append(html);
//     }
//     $("#file_select").click();//自动打开文件选择窗口
//     $(".jbox-body").hide();
// }
// function ajaxupload_start() {
//     toastr.success("正在上传!", "请等待");
//     toastr_tip();
// }
// function ajaxUploadFrameOnload(container) {
//     var callback = $("#callback").contents().find('body').html();
//     if (callback) {
//         var json = $.parseJSON(callback);
//         if (json.status != 1) {
//             toastr.error("上传失败，请重试!", "对不起");
//             toastr_tip();
//             return false;
//         }
//         window.ajaxUploadCallback(json);
//     }
// }



//删除列
function swapDel(id, url){
    parent.layer.confirm('你确定要删除此信息？', {
        btn: ['确定','取消'], //按钮
        shade: false //不显示遮罩
    }, function(){
        $.ajax({
            url: url,
            method: 'POST',
            dataType: 'json',
            data: {
                id: id
            },
            success: function (json) {
                if (json.status == true) {
                    parent.layer.msg('删除成功', {
                        icon: 1
                    });
                    //删除列表
                    for (var i = 0; i < id.length; i++) {
                        $("#node-" + id[i]).remove();
                    }
                    $("#node-" + id).remove();
                } else {
                    parent.layer.msg('删除失败，' + json.msg, {
                        time: 2000, shift: 6
                    });
                }
            }
        });
    }, function(){
        parent.layer.msg('你已经取消了删除', {
            shift: 1
        });
    });
}

//全选
function all_select(){
    $("input[type='checkbox']").each(function() {
        $(this).prop("checked", true);
    });
}

//返选
function un_select(){
    $("input[type='checkbox']").each(function () {
        $(this).prop("checked", !$(this).prop("checked"));
    });
}

//清除
function reverse(){
    $("input[type='checkbox']").each(function() {
        $(this).prop("checked", false);
    });
}

//获取选中的值
function getValue(){
    var valArr = [];
    $("input[type='checkbox']:checked").each(function(i){
        valArr[i] = $(this).val();
    });
    return valArr;
}


//开始日期
function start_time(id){
    if(!id){
        id = '#start_time';
    }
    var start = {
        elem: id,
        format: 'YYYY/MM/DD hh:mm:ss',
        //min: laydate.now(), //设定最小日期为当前日期
        min: '2000-01-01 00:00:00', //设定最小日期为当前日期
        max: '2099-06-16 23:59:59', //最大日期
        istime: true,
        istoday: true,
        choose: function (datas) {
            end.min = datas; //开始日选好后，重置结束日的最小日期
            end.start = datas //将结束日的初始值设定为开始日
        }
    };
    return start;
}

//结束日期筛选
function end_time(id){
    if(!id){
        id = '#end_time';
    }
    var end = {
        elem: id,
        format: 'YYYY/MM/DD hh:mm:ss',
        min: '2000-01-01 00:00:00',
        max: '2099-06-16 23:59:59',
        istime: true,
        istoday: true,
        choose: function (datas) {
            start.max = datas; //结束日选好后，重置开始日的最大日期
        }
    };
    return end;
}

/**
 * toastr 提示
 */
function toastr_tip(){
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "onclick": null,
        "showDuration": "400",
        "hideDuration": "1000",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
}

