/**
 * Created by colin on 2015/8/14.
 */

(function(){
    //首页图片放大
    $(".by-jiaoao-right3 .bj3-11").hover(function(){
        $(this).addClass("activity");
    },function(){
        $(this).removeClass("activity");
    });
    //顶部菜单切换展示
    $(".menu li").hover(function(){
        $(this).find(".m-list").show();
    },function(){
        $(this).find(".m-list").hide();
    });
    //班级风采侧边栏
    $(".a-one").click(function(){
        var $o_dv = $(this).parent(".m-li").siblings().find(".x-dv");
        var $o_a = $(this).parent(".m-li").siblings().find(".a-one");
        var $next = $(this).next(".x-dv");
        $o_dv.slideUp();
        $next.slideToggle();
        $o_a.removeClass("selected");
        $(this).toggleClass("selected");
    });

    /*var $xdv = $(".x-dv a");
    $xdv.click(function(){
        $xdv.removeClass("fon");
        $(this).addClass("fon");
    });*/

    //滚动处切换
    var $sps = $(".bjfc1 span");
    $sps.click(function(){
        var index = $(this).index();
        $(".dv .dv1").eq(index).addClass("show").siblings().removeClass("show");
        $sps.removeClass("active");
        $(this).addClass("active");
    });

    //好书推荐
    var $books = $(".book-nav span");
    $books.click(function(){
        var index = $(this).index();
        $(".list-right-book-con ul").eq(index).addClass("show").siblings("ul").removeClass("show");

        //$(".list-right-book-con .page").eq(index).addClass("show").siblings(".page").removeClass("show");

        $books.removeClass("active");
        $(this).addClass("active");
    });



    var $lis = $(".pic-con3 li");
    $lis.click(function(){
        $lis.removeClass("active");
        $(this).addClass("active");
    });
    //返回顶部
    $("#backTop").on("click",move);
    $(window).on("scroll",function(){
        check(300);
    });
    function move(){
        $("html,body").stop().animate({
            scrollTop:0
        },200);
    };
    function check(pos){
        if($(window).scrollTop() > pos){
            $("#backTop").fadeIn();
        }
        else{
            $("#backTop").fadeOut();
        }
    };

    //判断搜索框为空
    $(".search a").on("click",function(){
        var txt = $.trim($("input[name=search]").val());
        if(txt == null || txt == "")
        {
            alert('请输入您想要搜索的内容！');
        }
        else{
            $("#search_form").submit();
        }
    });

})();

//滚动
var flag = "left";
function _scroll(wraper,prev,next,img,speed,or,ad){
    var wraper = $(wraper);
    var prev = $(prev);
    var next = $(next);
    var img = $(img).find('ul');
    var w = img.find('li').outerWidth(true);
    var s = speed;
    next.click(function(){
        img.animate({'margin-left':-w},function(){
            img.find('li').eq(0).appendTo(img);
            img.css({'margin-left':0});
        });
        /*if(img.is(":animated")){}*/
        flag = "left";
    });
    prev.click(function(){
        img.find('li:last').prependTo(img);
        img.css({'margin-left':-w});
        img.animate({'margin-left':0});
        /*if(img.is(":animated")){}*/
        flag = "right";
    });
    if (or == true){
        ad = setInterval(function() {
            flag == "left" ? next.click() : prev.click()
        },s*1000);
        wraper.hover(function(){
            clearInterval(ad);
        },function(){
            ad = setInterval(function() {
                flag == "left" ? next.click() : prev.click()},s*1000);
        });
    }
}


