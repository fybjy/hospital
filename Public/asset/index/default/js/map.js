var markersXml = "";
//var myIcon = new BMap.Icon("http://www.zycq.cn/images/favicon.png", new BMap.Size(18, 18), { offset: new BMap.Size(9, 9) });
function LoadMarkers(map, aid) {
    var bounds = map.getBounds();
    var SWPoint = bounds.getSouthWest();
    var NEPoint = bounds.getNorthEast();
    var xy = SWPoint.lng + ',' + SWPoint.lat + ',' + NEPoint.lng + ',' + NEPoint.lat;
    $.ajax({
        url: "/index/index/ajax_maps", type: "GET", dataType: "json", timeout: 5000, cache: false, data: "event=getorganizationmarkers&val=" + xy+'&aid='+aid,
        success: function (xml) {
            markersXml = xml.msg;
            map.clearOverlays();
            $.each(markersXml,function (k,v) {
                    var id = v.id;
                    var name = v.org_name;
                    var lng = v.point_x;
                    var lat = v.point_y;
                    var logo = v.logo;
                    var intro = v.intro;
                AddMarker(map, new BMap.Point(lng, lat), id, name,logo,intro);

            });
        }
    });
}
function AddMarker(map, point, id, name,logo,intro) {

    var myIcon = new BMap.Icon("/asset/index/default/img/favicon.png", new BMap.Size(18,18),{ offset: new BMap.Size(9, 9) });

    var marker = new BMap.Marker(point,{icon:myIcon});

    marker.addEventListener("click", function () {
        OpenInfoWindow(map, point, id,name,logo,intro);
    });
    marker.setTitle("(点击查看)" + name);
    map.addOverlay(marker);
}
function OpenInfoWindow(map, point, id,name,logo,intro) {

        var html ='<h1 style="width:100%;font:bold 14px/16px arial,sans-serif;white-space:nowrap;color:#cc5522;overflow:hidden;">'+name+'</h1>';
        html += '<img style="width:50px;float:left;padding:0 5px 5px 0;" src="' + logo + '"/>';
        html += (intro+'<a target="_blank" style="text-decoration: none; color:black;" href="/index/index/org_info?oid='+id + '">【查看组织信息】</a>');
        var opts = { width: 300, height: 100, title: "" };
        var infoWindow = new BMap.InfoWindow(html, opts);
        var infoWindow = new BMap.InfoWindow(html, opts);
        map.openInfoWindow(infoWindow, point);

}




