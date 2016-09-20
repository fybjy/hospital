function ajaxupload(container, type, callback) {

	if (!type) {
		alert('没有定义文件类型');
		return false;
	}
	window.ajaxUploadCallback = callback;
	var html = "<style>";
	html += ".ajax_upload {";
	html += "top: 50%;";
	html += "left: 50%;";
	html += "margin-top: 30px;";
	html += "margin-left: 100px;";
	html += "}";
	html += ".file-btn {";
	html += "position: relative;";
	html += "direction: ltr;";
	html += "height: 27px;";
	html += "overflow: hidden;";
	html += "text-align: center;";
	html += "width: 101px;";
	html += "background: url('http://static.weiwubao.com/asset/lib/images/btn/upload.png') no-repeat;";
	html += "color: #FFF;";
	html += "}";
	html += ".file-btn input {";
	html += "cursor: pointer;";
	html += "text-align: right;";
	html += "z-index: 10;";
	html += "font-size: 101px; /* font-size: 118px 工作正常 */";
	html += "position: absolute;";
	html += "top: 0px;";
	html += "right: 0px;";
	html += "opacity: 0;";
	html += "filter: Alpha(opacity:0);";
	html += "}";
	html += "</style>";
	html += "<form id='uploadform' method='post' action='/common/uploadfile/index' target='callback' enctype='multipart/form-data' >";
	html += "<div id='upload' class='ajax_upload'>";
	html += "<div class='file-content'><input type='file' name='file' onchange='$(\"#ajaxupload_submit\").click();ajaxupload_start()' id='file_select' title='选择文件上传'/></div>";
	html += "<input name='fileType' type='hidden' value=\"" + type + "\"/>";
	html += "<input name='ajaxupload_submit' type='submit' id='ajaxupload_submit' style='display:none;'/>";
	html += "<div style='display:none;'><iframe name='callback' id='callback' onload='ajaxUploadFrameOnload(\"" + container + "\")' style='display: none;'></iframe></div>";
	html += "</div>";
	html += "</form>";
	//$.jBox(html, {title: "文件上传", width: 300, height: 140, border: false, top: "30%", bottomText: '上传文件物理大小限制:8000KB', buttons: {'取消': true}});
    var pageii = $.layer({
        type: 1,
        title: '上传文件物理大小限制:7MB',
        area: ['300', '140'],
        border: [0], //去掉默认边框
        shade: [0.5, '#000'], //去掉遮罩
        shift: 'left', //从左动画弹出
        page: {
            html: html
        }
    });
	//初始化文件域样式
	$('.file-content').addClass('file-btn');
	$('.file-content').each(function(i, el) {
		$(this).html($(this).html());
	});
	$("#file").change(function() {
		$("#ajaxupload_submit").click();
	});
	//var ie = !-[1, ];
	//if (ie != true) {
	$("#file_select").click();//自动打开文件选择窗口
	//}
}
function ajaxupload_start() {
	//$.jBox.tip("正在上传,请稍后...", 'loading', {top: "30%"});
    layer.load('正在上传,请稍后...', 10);
}
function ajaxUploadFrameOnload(container) {
	var callback = $("#callback").contents().find('body').html();
	if (callback) {
        if(callback.indexOf('<')>-1){
            callback = callback.split('<')[0];
        }
		var json = $.parseJSON(callback);
		if (json.status != 1) {
			//$.jBox.closeTip();
            //$.jBox.error(json.message, '上传失败', {buttons: {'知道了': true}});
            layer.closeAll();
            layer.alert('上传失败', 8);
			return false;
		}
		//$.jBox.closeTip();
		//$.jBox.close();
        layer.closeAll();
		$("#" + container).val(json.file.path);
		window.ajaxUploadCallback(json);
	}
}