var is_upload = false;//初始化判断是否正在上传
var status = false;
function ajaxupload(container, type, callback,t) {
	status = true;
	if (!type) {
		$.toast('没有定义文件类型',"cancel");
		return false;
	}

	window.ajaxUploadCallback = callback;
	$("body").append("<style>  #uploadform{ display: none;}</style>");
	var html = "";
	html += "<form id='uploadform' method='post' action='/common/upload/' target='callback' enctype='multipart/form-data' >";
	html += "<div id='upload' class='ajax_upload'>";
	html += "<div class='file-content'><input type='file' name='file' onchange='is_up()' id='file_select' title='选择文件上传'/></div>";
	html += "<input name='fileType' type='hidden' value=\"" + type + "\"/>";
	html += "<input name='ajaxupload_submit' type='submit' id='ajaxupload_submit' style='display:none;'/>";
	html += "<div style='display:none;'><iframe name='callback' id='callback' onload='ajaxUploadFrameOnload(\"" + container + "\")' style='display: none;'></iframe></div>";
	html += "</div>";
	html += "</form>";
	if ($("#uploadform").length == 0) {
		$("body").append(html);
	}
	$("#file_select").click();//自动打开文件选择窗口
	//}
}
function ajaxupload_start() {
	if(is_upload && status){
		$.toast('重新上传');
	}
	$.showLoading('上传中...');
	setTimeout(function(){
		$.hideLoading();
	},20000);
	is_upload = true;
}
function is_up(){
	var is_select = $('#file_select').val();
	if(is_select != '') {
		$('#ajaxupload_submit').click();
		ajaxupload_start();
		console.log("以选择");
	}else{
		console.log('为选择文件')
	}
}
function ajaxUploadFrameOnload(container) {
	var callback = $("#callback").contents().find('body').html();
	if (callback) {
		var json = $.parseJSON(callback);
		$.hideLoading();
		if (json.status != 1) {
			$.toast('上传失败',"cancel");
			return false;
		}
		is_upload = false;
		$("#" + container).val(json.file.path);
		$("#uploadform").remove();//移除追加到body的表单，不然会存在AJAX再提交一次
		window.ajaxUploadCallback(json);//上传成功回调
	}
}