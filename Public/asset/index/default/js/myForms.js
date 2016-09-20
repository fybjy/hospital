 $(function() {

		$(".myForm .cj-Radio").click(function(){
			$(this).parent().parent().find(".cj-Radio").removeClass("cj-Radio-hover");
			$(this).addClass("cj-Radio-hover");

			if($(this).hasClass("type-btn")){
				$(".type-area").addClass("hidden");
				$(".type-area").eq($(this).attr("data-index")).removeClass("hidden");
			}

			$(this).parent().find("input").val($(this).attr("data-value"));

		})

		$(".myForm .cj-CheckBox").click(function(){

			var objs = $(this).parent().find(".cj-CheckBox-hover");

			if($(this).hasClass("cj-CheckBox-hover")){
				$(this).removeClass("cj-CheckBox-hover");

				var temp = new Array();
				$(this).parent().parent().find(".cj-CheckBox-hover").each(function(index, element) {
                    temp.push($(this).attr("data-value"));
                });
				$(this).parent().find("input").val(temp.join(","));

				return false;
			}
			var _max = parseInt($(this). parent().attr("data-max"));

			if(_max <= objs.length){
				objs.first().removeClass("cj-CheckBox-hover");
			}
			$(this).addClass("cj-CheckBox-hover");

			var temp = new Array();
			$(this).parent().parent().find(".cj-CheckBox-hover").each(function(index, element) {
				temp.push($(this).attr("data-value"));
			});
			$(this).parent().find("input").val(temp.join(","));
		})




    })
$(document).on('click', '.myForm .cj-Select .select-btn', function() {
	$(this).parent().find(".cj-Option").parent().show(0)
});


$(document).on('click', '.myForm .cj-Option li', function() {
	$(this).parent().parent().hide(0);
	$(this).parent().parent().parent().find(".select-text").text($(this).text());
	$(this).parent().parent().parent().find("input").val($(this).data("value"));

	var id = $(this).data("value").split(",")[0];

	var index = $(this).parent().parent().parent().parent().index();


	if(index == 0){
		$.ajax({
			url: 'volunteer_reg?action=getAreaByParentId',
			type: 'POST',
			dataType: 'json',
			data: {
				"parent_id": id
			},
		})
		.done(function(json) {
			$(".cj-Option").eq(1).html('');
			$(".cj-Option").eq(2).html('');
			for (var i = 0; i < json.data.areaList.length; i++) {
				var html = "<li data-value='"+json.data.areaList[i]["aid"]+","+json.data.areaList[i]["name"]+"'>"+json.data.areaList[i]["name"]+"</li>"
				$(".cj-Option").eq(1).append(html);
			}
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	}else if(index == 1){
		$.ajax({
			url: 'volunteer_reg?action=getAreaByParentId',
			type: 'POST',
			dataType: 'json',
			data: {
				"parent_id": id
			},
		})
		.done(function(json) {
			$(".cj-Option").eq(2).html('');
			for (var i = 0; i < json.data.areaList.length; i++) {
				var html = "<li data-value='"+json.data.areaList[i]["aid"]+","+json.data.areaList[i]["name"]+"'>"+json.data.areaList[i]["name"]+"</li>"
				$(".cj-Option").eq(2).append(html);
			}
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	}
});
