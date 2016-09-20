/**
 * Created by Hexingke on 2015/7/17.
 */
//修改表单验证
$("#form").validate({
    rules: {
        web_name: {
            required: true,
            minlength: 2,
            maxlength: 15
        },
        email: {
            required: true,
            email: true
        },
        tel : {
            required : true,
            isphone : true
        }
    },
    messages: {
        web_name: {
            required: "网站名称必填",
            minlength: "最少两个字符以上",
            maxlength: "最大十五个字符"
        },
        email: {
            required: '请输入电子邮件',
            email: '请检查电子邮件的格式'
        },
        tel: {
            required : "请输入电话号码",
            isphone : "请输入正确的电话号码"
        }
    },
    submitHandler: function(form){   //表单提交句柄,为一回调函数，带一个参数：form
        //获得整个表单数据
        var data = $("#form").serialize();
        $.ajax({
            type: 'POST',
            url: '/admin/config/edit',
            data: data,
            success: function (json) {
                if (json.status == true) {
                    toastr.success(json.msg, "恭喜您！");
                    toastr_tip();//更新成功提示
                } else {
                    toastr.error(json.msg, "对不起！");
                    toastr_tip();
                }
            }
        });
    }
});
jQuery.validator.addMethod("isphone", function(value, element) {
    var length = value.length;
    var phone = /(^(\d{3,4}-)?\d{6,8}$)|(^(\d{3,4}-)?\d{6,8}(-\d{1,5})?$)|(\d{11})/;
    return this.optional(element) || (phone.test(value));
}, "请填写正确的电话号码");