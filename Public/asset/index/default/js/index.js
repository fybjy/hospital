 $(function(){
	 //首页js
      //  var glide = $('.slider1').glide({
      //      //autoplay:true,//是否自动播放 默认值 true如果不需要就设置此值
      //      animationTime:500, //动画过度效果，只有当浏览器支持CSS3的时候生效
      //      arrows:false, //是否显示左右导航器
      //      arrowsWrapperClass: "arrowsWrapper",//滑块箭头导航器外部DIV类名
      //      arrowMainClass: "slider-arrow",//滑块箭头公共类名
      //      arrowRightClass:"slider-arrow--right",//滑块右箭头类名
      //      arrowLeftClass:"slider-arrow--left",//滑块左箭头类名
      //      arrowRightText:">",//定义左右导航器文字或者符号也可以是类
      //      arrowLeftText:"<",
     //
      //      nav:false, //主导航器也就是本例中显示的小方块
      //      navCenter:true, //主导航器位置是否居中
      //      navClass:"slider-nav",//主导航器外部div类名
      //      navItemClass:"slider-nav__item", //本例中小方块的样式
      //      navCurrentItemClass:"slider-nav__item--current" //被选中后的样式
      //  });

	 $(function(){
		 $('.banner').slick({
			 accessibility : false,
			 arrows : false,
			 dots: false,
			 infinite: true,
			 speed: 100,
			 fade: false,
			 slide: 'div',
			 cssEase: 'linear'
		 });
	 })


	 /**
	  * 网站登录 (志愿者/组织)
	  */
	 $('.login').click(function() {
		 var data = {
			 account: $('#account').val(),
			 password: $('#password').val(),
			 login_class: $('#login_class').val(),
			 whether_remember: $('#whether_remember').val()
		 };

		 if($.trim(data.account).length <= 0 || $.trim(data.password).length <= 0) {
			 $('.msg_error').html('账号密码不能为空!');
			 return false;
		 }

		 $.ajax({
			 url: "/index/login/login",
			 method: "POST",
			 dataType: "JSON",
			 data: data,
			 success: function(result) {
				 if(result && result.status == true) {
					 window.location.href = '/';
				 } else {
					 $('.msg_error').html(result.msg ? result.msg : '登录失败,请稍后重试...');
				 }
			 }
		 });
	 });

	 $('#password').keydown(function(e) {
		 var e = e || event,
			 keyCode = e.which || e.keyCode;
		 if (keyCode == 13) {
			 $('.login').trigger("click");
		 }
	 });
 });