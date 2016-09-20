/**
 * Created by colin on 2016/4/26.
 */


/**
 * Created by colin on 2015/10/12.
 */

(function(){

    //返回顶部
    $("#backTop").on("click",move);
    var _top_btn = $(".toolbar");
    $(window).on("scroll",function(){
        check(300);
    });
    function move(){
        $("html,body").stop().animate({
            scrollTop:0
        },300);
    };
    function check(pos){
        if($(window).scrollTop() > pos){
            $("#backTop").fadeIn();
        }
        else{
            $("#backTop").fadeOut();
        }
    };
    $(window).on("scroll",function(){
        var htop = $(window).scrollTop();
        var ph = $(window).height();
        var dh = document.body.scrollHeight;
        var scroll_top = dh - htop - ph;
        if (scroll_top <= 38) {
            _top_btn.css("bottom", 38-scroll_top);
        } else {
            _top_btn.css("bottom", 38);
        }
    });

    //单选设置
    $('.js-radios .js-radio').click(function(){
        var index = $(this).index();
        $(this).find('a').addClass('t-radio-on');
        $(this).siblings().find('a').removeClass('t-radio-on');
        $(this).siblings('input').attr('value',index+1);
        if(index == 0){
            $(this).parents('.t-form-item').next('.js-dv').show(0);
        }else{
            $(this).parents('.t-form-item').next('.js-dv').hide(0);
        }
    });

    //协议
    $('.t-agree').click(function(){
        $(this).toggleClass('select');
    });

    $('.js-radios .js-radio1').click(function(){
        var index = $(this).index();
        $(this).find('a').addClass('t-radio-on');
        $(this).siblings().find('a').removeClass('t-radio-on');
        $(this).siblings('input').attr('value',index+1);
        if(index == 0 || index == 1 || index == 2 ){
            $(this).parents('.t-form-item').siblings('.js-dvdv1').hide(0).siblings('.js-dvdv2').hide(0);
        }
        if(index == 3){
            $(this).parents('.t-form-item').siblings('.js-dvdv1').show(0).siblings('.js-dvdv2').hide(0);
        }
        if(index == 4){
            $(this).parents('.t-form-item').siblings('.js-dvdv2').show(0).siblings('.js-dvdv1').hide(0);
        }
    });

    $('.js-radios .js-radio2').click(function(){
        var index = $(this).index();
        $(this).find('a').addClass('t-radio-on');
        $(this).siblings().find('a').removeClass('t-radio-on');
        $(this).siblings('input').attr('value',index+1);
        if(index == 0 || index == 1 ){
            $(this).parents('.t-form-item').next('.js-dvdv1').show(0);
        }else{
            $(this).parents('.t-form-item').next('.js-dvdv1').hide(0);
        }

    });

    //多选设置

    //步骤切换
    $('.cl-menu .cl-menu-a').click(function(){
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        var index = $(this).index();
        $('.cl-content .t-step-con').eq(index).show(0).siblings().hide(0);
    });
    //下一步
    $('.sub-next').click(function(){
        var index = $(this).parents('.t-step-con').index();
        $(this).parents('.t-step-con').hide(0);
        $(this).parents('.t-step-con').next('.t-step-con').show(0);
        $('.cl-menu .cl-menu-a').eq(index+1).addClass('active').siblings().removeClass('active');
    });
    //上一步
    $('.sub-prev').click(function(){
        var index = $(this).parents('.t-step-con').index();
        $(this).parents('.t-step-con').hide(0);
        $(this).parents('.t-step-con').prev('.t-step-con').show(0);
        $('.cl-menu .cl-menu-a').eq(index-1).addClass('active').siblings().removeClass('active');
    });

    //文字提示
    $('.cl-t-icon').hover(function(){
        $(this).find('.dv1').show(0);
        $(this).find('.dv2').show(0);
    },function(){
        $(this).find('.dv1').hide(0);
        $(this).find('.dv2').hide(0);
    });

})();


/**
 * 验证表单
 */

//是否为中文
function isCn(cn){
    var chinese = /^[\u4E00-\u9FFF]{2,4}$/;
    return(chinese.test(cn));
}

//是否为邮编
function isYb(obj){
    var yb = /^[1-9]\d{5}(?!\d)$/;
    return(yb.test(obj));
}


//验证手机号码
function isMobile(str) {
    if (str.toString().length != 11)
        return false;
    var prefix = [166,130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 147, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189];
    var re = new RegExp("^(" + prefix.join("|") + ")\\d+$");
    return re.test(str);
}

//固定电话
function isgdPhone(obj){
    var gdPhone1 = /^\d{3}-\d{8}$/;
    var gdPhone2 = /^\d{4}-\d{7}$/;
    return(gdPhone1.test(obj) || gdPhone2.test(obj));
}


//是否为身份证
function isSf(sf){
    var isIDCard1=/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$/;//(15位)
    var isIDCard2=/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/;//(18位)
    return(isIDCard1.test(sf) || isIDCard2.test(sf));
}

//验证邮箱
function isYx(yx){
    var reyx = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
    /*var reyx = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;*/
    return(reyx.test(yx));
}

//是否为1-10位的数字
function isSz(obj){
    var reyx = /^[0-9]{1,10}$/;
    return(reyx.test(obj));
}

//是否为6位的数字
function isSz6(obj){
    var reyx = /^[0-9]{6}$/;
    return(reyx.test(obj));
}


//是否为15位的数字
function isYyzhizhao(obj){
    /*var reyx = /\d{15}/;*/
    var reyx = /^[0-9]{15}$/;
    return(reyx.test(obj));
}

//是否为(1到10为的0-9。。。，3345、412.356)
function isZfds(obj){
    var reyx = /^([0-9]{1,10}|[1-9]{1,10}\.\d+$|^\d\.\d+$)$/;
    return(reyx.test(obj));
}

//是否为年龄0-100
function isAge(num){
    var age = /^([0-9]|[0-9]{2}|100)$/;
    return(age.test(num));
}

//家庭人数
function isGeShu(num){
    var gs = /^([1-9]|[1-9]{2})$/;
    return(gs.test(num));
}

//雇佣人数
function isGuShuYong(num){
    var gs = /^([0-9]{1,10})$/;
    return(gs.test(num));
}


//是否为车牌后五位
function isCp(obj){
    var reyx = /^[a-zA-Z0-9]{5}$/;
    return(reyx.test(obj));
}

//是否为车架号后六位
function isCj(obj){
    var reyx = /^[0-9]{6}$/;
    return(reyx.test(obj));
}

//是否为银行卡号
function isYhk(obj){
    var reyx = /^(\d{13}|\d{16}|\d{19})$/;
    return(reyx.test(obj));
}



function _upload( button , url , collback ){
    button.upload({
        url : url,
        suffix: ["jpg", "JPG", "png", "jpeg","gif"],
        size: 51200,

        selectComplete : function(){
            button.data("upload").upload();
        },

        prepareUploadItem: function() {
            layer.load();
        },
        uploadCompleteItem : function(res){
            layer.closeAll();
            collback(res);
        },
        //上传单个文件错误的回调
        uploadErrorItem: function() {
            layer.alert("上传失败");
        }
    });
}

function focus(id){
    if (getCookie('focus'+id)){}else{
        $.post("/site/incubator/focus",{ id:id},function(result){
            if (result.status){
                setCookie('focus'+id,result.data);
            }
        })
    }

}

function setCookie(name,value){
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
}

function getCookie(name){
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");

    if(arr=document.cookie.match(reg))

        return unescape(arr[2]);
    else
        return null;
}

function imgSrc(src , size){
    ///data/attachment/upload/image/20160122/201601221610541.jpg

    if (size == undefined){
        $(this).attr("src" , src);
        return src;
    }
    var imgAdd = '/data/attachment';

    var imgArray = src.split("/");
    var leng = imgArray.length;
    for (var i = 0 ; i< leng ; i++){
        if (leng == i+1){
            imgAdd += size+'x'+size+"_" + imgArray[i];
        }else{
            imgAdd += imgArray[i]+"/";
        }
    }

    return imgAdd;

}