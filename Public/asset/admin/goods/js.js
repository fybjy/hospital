$(function(){
    //$('#myModal2').modal('show');
})

//添加规格
$(".esa_add").click(function(){
    var html ='<div class="esa_row">';
    html +='    <div>';
    html +='        <input type="text" class="space_n" /> <span class="label label-danger rem_space_n">移除</span>';
    html +='    </div>';
    html +='    <div>';
    html +='        <p style="display: none;"></p>';
    html +='        <p> <input type="text" class="space_v" /> <span class="label label-danger rem_space_v">移除</span></p>';
    html +='        <p style="text-align: center;"> <span class="label label-info add_space_v">添加</span></p>';
    html +='    </div>';
    html +='</div>';
    $('.attr_list').append(html);
});
//移除整条规格
$(document).on("click",".rem_space_n",function(){
    $(this).parent().parent().remove();
});
//添加规格值
$(document).on("click",".add_space_v",function(){
    var html = '<p> <input type="text" class="space_v" /> <span class="label label-danger rem_space_v">移除</span></p>';
    $(html).insertAfter($(this).parent().prev());
});
//删除规格值
$(document).on("click",".rem_space_v",function(){
    if( parseInt($(this).parent().parent().find(".space_v").length) <= 1){
        $(this).parent().parent().parent().remove();
    }else{
        $(this).parent().remove();
    }
});

//保存所填写的规格信息  并隐藏规格编辑框
$(document).on('click','.close_modal',function(){
    $('#myModal2').modal('hide');
    //判断是否有相同的规格信息
    var spacename = '';
    var msg = '';
    var space = [];

    $(".esa_row").each(function(j){
        if(msg){ return false; }
        var tmp = {};
        tmp['key'] = $.trim($(this).find(".space_n").val());
        if(j>0){
            if( $.trim($(this).find(".space_n").val()) == spacename   && $.trim($(this).find(".space_n").val()) == '' ){
                msg = "规格不能相同额！";
                return false;
            }
        }else{
            if($.trim($(this).find(".space_n").val())){
                spacename = $.trim($(this).find(".space_n").val());
            }else{
                msg = "规格不能是空的额！如不需要请移除";
                return false;
            }
        }

        var spacevalue = '';
        var tmp_v = [];
        $(this).find(".space_v").each(function(k){
            //tmp_v[k] = $.trim($(this).val());
            tmp_v.push($.trim($(this).val()));
            if(k > 0){
                if(spacevalue == $.trim($(this).val())  || $.trim($(this).val()) == '' ) {
                    msg = "规格不能相同额！";
                    return false;
                }
            }else{
                if($.trim($(this).val())){
                    spacevalue = $.trim($(this).val());
                }else{
                    msg = "规格不能是空的额！如不需要请移除";
                    return false;
                }
            }

        });

        tmp['value'] = tmp_v;
        space[j] = tmp;

    });
    if(msg){
        alert(msg);
        return false;
    }
    //验证完成  生成规格信息
    console.log(space);
    createSpec(space);
})
var currIndex = 0;
//生成规格信息
function createSpec(spec){
    console.log(spec);
    var relArr = []; //最终生成的规格数字下标  数组
    var relArr2 = [];//z最终生成的规格名称数组
    var speclenth = 0; //规格的个数
    var space_v = []; //只包含规格值得数组  不包含规格名称
    for( var i in spec ){
        space_v.push(spec[i]['value']);
        ++speclenth;
    }

    if(speclenth <= 0 ){
        return false;
        //什么规格也没有
    }else if(speclenth == 1){
        //只有一条规格信息
        for(var i in spec[0]['value']){
            var kk = [],vv = {};
            kk.push(i);
            vv[0] = spec[0]['value'][i];
            relArr.push(kk);
            relArr2.push(vv);
        }

    }else{
        var  i, l, d, dd;
        for (var k in space_v) {
            var arr = space_v[k];
            if (relArr.length) {
                var tempArr = relArr.concat();
                var tempArr2 = relArr2.concat();
                relArr = [];
                relArr2 = [];
                for (i = 0, l = tempArr.length; i < l; i++) {
                    for (var ii = 0, ll = arr.length; ii < ll; ii++) {
                        d = tempArr[i].concat();
                        d.push(ii);
                        relArr.push(d);
                        dd = [];
                        for (var tk in tempArr2[i]) {
                            dd[tk] = tempArr2[i][tk]
                        }
                        dd[k] = arr[ii];
                        relArr2.push(dd);
                    }
                }
            } else {
                for(i = 0, l = arr.length; i < l; i++){
                    d = [];
                    d.push(i);
                    relArr.push(d);
                    dd = [];
                    dd[k] = arr[i];
                    relArr2.push(dd);
                }
            }
        }


    }
    if(!relArr2){
        //$( ".goods_space" ).toggle( "clip" );
        $('#myModal2').modal('hide');
        return false;
    }

    //输出
    $(".spce_list").empty();
    var html = '<tr>';
    html += '<td>-attr_name-<input type="hidden" name="attr_name[]" value="-attr_name-" /></td>';
    html += '<td><input type="text" class="attr_price n_price" name="order[m_price-{num}]" /></td>';
    html += '<td><input type="text" class="attr_price y_price" name="order[n_price-{num}]" /></td>';
    html += '<td><input type="text" class="attr_inventory inventory" name="order[inventory-{num}]" value="100" /><input type="hidden" name="attr_key[]" value="%attr_key%" /></td>';
    html += '</tr>';
    for(var j in relArr2 ){
        var html_tmp = '';
        if(speclenth == 1 ){
            html_tmp = html.replace(/\-attr_name-/g,relArr2[j][0]);
            html_tmp = html_tmp.replace("%attr_key%",relArr[j][0]);
        }else{
            html_tmp = html.replace(/\-attr_name-/g,relArr2[j].join(','));
            html_tmp = html_tmp.replace("%attr_key%",relArr[j].join(''));
        }
        //$(".spce_list").append(html_tmp);
        $(".spce_list").append(html_tmp.replace(/\{num\}/g, currIndex++));
    }
    $(".show_inventory").val(relArr2.length * 100);  //显示的库存数量
    $('#attrs').val(JSON.stringify(spec));   //加入 原始数据
    //$( ".goods_space" ).toggle( "clip" );
    $('#myModal2').modal('hide');
}







