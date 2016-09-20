$(function(){
	/**
	*公共js
	*/
	$(".cj-switch li").click(function(){
		$(".cj-switch li").removeClass("hover");
		$(this).addClass("hover");
		$(".cj-switch-area").addClass("hidden");
		$(".cj-switch-area").eq($(this).index()).removeClass("hidden");
	})

	$(".cj-switch-login li").click(function(){
		$(".cj-switch-login li").removeClass("hover");
		$(this).addClass("hover");
		$('#login_class').val($(this).attr("data-value"));//区别当前登录者是:志愿者还是组织
	})

	$(".switch-rank li").click(function(){
		$(".switch-rank li").removeClass("hover");
		$(this).addClass("hover");
		$(".cj-table-rank").addClass("hidden");
		$(".cj-table-rank").eq($(this).index()).removeClass("hidden");
	})

	$(".switch-movie li").click(function(){
		$(".switch-movie li").removeClass("hover");
		$(this).addClass("hover");
		$(".switch-movie-area").addClass("hidden");
		$(".switch-movie-area").eq($(this).index()).removeClass("hidden");

        $(".switch-movie-link").attr("href",$(this).attr("data-value"));

	})

	$(".switch-code li").click(function(){
		$(".switch-code li").removeClass("hover");
		$(this).addClass("hover");
		$(".switch-code-area").addClass("hidden");
		$(".switch-code-area").eq($(this).index()).removeClass("hidden");
	})

	$(".switch-msg li").click(function(){
		$(".switch-msg li").removeClass("hover");
		$(this).addClass("hover");
		$(".switch-msg-area").addClass("hidden");
		$(".switch-msg-area").eq($(this).index()).removeClass("hidden");
	})

	$(".cj-switch-role li").click(function(){
		$(".cj-switch-role li").removeClass("hover");
		$(this).addClass("hover");
		$(".cj-switch-role-area").addClass("hidden");
		$(".cj-switch-role-area").eq($(this).index()).removeClass("hidden");
	})
    //首页头部
	$(".cj-search li").click(function(){
		$(".cj-search li").removeClass("hover");
		$(this).addClass("hover");
		$(".key-type").val($(this).text());

		var index = $(this).index();
        $("#search-form").attr('action',$(this).attr('data-url'));
		if(index  == 0)
			ml = 57;
		if(index  == 1)
			ml = 108;
		if(index  == 2)
			ml = 152;

		$(".search-img").css({
			marginLeft : ml + "px"
		})

	})
    $(".search-submit").click(function(){

        var keytype = $('.key-type').val();
        var keyword = $('.keyword').val();
        if(keyword ==''){
            $('.keyword').focus();
            layer.tips('请输入关键字', ".keyword", {
                tips: [1, 'Red'],
                time: 3000
            });
            return false;
        }else{
            $("#search-form").submit();
        }
      /*  if(keytype=='志愿者'){
            $("#search-form").attr('action','/index/index/rank_list');
            location.href = '/index/index/rank_list?keyword='+keyword
        }
        if(keytype=='组织'){
            location.href = '/index/index/org_list?keyword='+keyword;
        }
        if(keytype=='内容'){
            location.href = '/index/article/index?keyword='+keyword;
        }*/


    })


	//市青协列表专用
	$(".nav-sqx-area li").click(function(){
		$(".nav-sqx-area li").removeClass("hover");
		$(this).addClass("hover");
       /* $.ajax({
            url: "/index/union/articlelist",
            method: "POST",
            dataType: "JSON",
            data: {ac_id:$(this).attr('data')},
            success: function(result) {
                if(result && result.status == true) {
                    window.location.href = '/';
                } else {
                    $('.msg_error').html(result.msg ? result.msg : '登录失败,请稍后重试...');
                }
            }
        });*/
        if($(this).attr('data') == 0){
            $(".cj-nav-info-area").addClass("hidden");
            $(".cj-nav-info-area").eq($(this).index()).removeClass("hidden");
        }

	})

    try{
        $('img').error(function(){
            $(this).attr('src',"/asset/index/default/img/img-head-default.jpg");
            console.log($(this));
        })
    }catch(e){
        console.log($(this));
    }

})
