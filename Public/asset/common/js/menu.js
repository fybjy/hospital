/**
 * Created by Jtq on 2015/8/17
 * User: 带鞋拖地
 * QQ：327056088
 * Email：myxingke@qq.com
 */
var str = '';
for(var i in menu){
    data = menu[i].items
    str += '<li>';
    if(data){
        str += '<a href="#">';
    }else{
        str += '<a href="'+ menu[i].rule +'" class="J_menuItem">';
    }
    str += '<i class="fa '+ menu[i].icon +'"></i>';
    str += '<span class="nav-label">'+ menu[i].title +'</span>';
    if(data){
        str += '<span class="fa arrow"></span>';
    }
    str += '</a>';
    if(data){
        str += chiuldren(data);
    }
    str += '</li>';
}

function chiuldren(data){
    str ='';
    str += '<ul class="nav nav-second-level" style="padding-left: 10px">';
    for(var i in data){
        str += '<li>';
        if(data[i].items){
            str += '<a href="'+ data[i].rule +'"><i class="fa '+ data[i].icon +'"></i>'+ data[i].title +'<span class="fa arrow"></span>';
        }else{
            str += '<a class="J_menuItem" href="'+ data[i].rule +'"><i class="fa '+ data[i].icon +'"></i>'+ data[i].title;
        }
        str += '</a>';
        if(data[i].items){
            str += chiuldren(data[i].items);
        }
        str += '</li>';
    }
    str += '</ul>';
    return str;
}
$('#side-menu').append(str);

