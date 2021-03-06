//文宝保打印设置
function wbbPrints(data) {
    var isGive = $('#print_template_isGive').html();
    if (data.isGive == 1) {
        isGive = isGive.replace('data_isGive', '<p style="line-height: 6mm;font-size: 4.5mm;">赠票</p>');
    } else {
        isGive = isGive.replace('data_isGive', '');
    }
    var logo = $('#wbb_logo').html();
    var logo_title = '<p style="line-height: 6mm;font-size: 4mm;font-family: 微软雅黑;font-weight: bold;">合作伙伴:</p>';
    var title = $('#print_template_title').html();
    title = title.replace('data_title', data.title);
    var content = $('#wbb_template').html();
    content = content.replace('data_add_time', data.add_time);
    content = content.replace('data_name', data.name);
    content = content.replace('data_addr', data.address);
    content = content.replace('data_pew', data.area + '　' + data.rank + '排' + data.seat + '座');
    content = content.replace('data_price', data.seat_name + ' ' + data.price + '元');

    if (data.host != '') {
        content = content.replace('data_host', '<p style="line-height: 5mm;margin: 0;">主办：' + data.host + '</p>');
    } else {
        content = content.replace('data_host', '');
    }

    if (data.undertake != '') {
        content = content.replace('data_undertake', '<p style="line-height: 5mm;margin: 0;">承办：' + data.undertake + '</p>');
    } else {
        content = content.replace('data_undertake', '');
    }
    content = content.replace('data_thinks', '<p style="line-height: 5mm;margin: 0;">特别鸣谢：丽森酒店</p>');
    var attr = $('#print_template_attr').html();
    attr = attr.replace('data_area', data.area);
    attr = attr.replace('data_pew', data.rank + '排' + data.seat + '座');
    attr = attr.replace('data_seatname', data.seat_name);
    if (data.isGive == 1) {
        attr = attr.replace('data_price', data.price + '元');
        attr = attr.replace('data_isGive', '赠票');
    } else {
        attr = attr.replace('data_price', data.price + '元');
        attr = attr.replace('data_isGive', '');

    }
    var remark = $('#print_template_remark').html();
    remark = remark.replace('data_remark', data.remark);
    try {
        var LODOP = getLodop();
        LODOP.PRINT_INIT('邮政票务打印系统_' + data.title + '_' + data.rank + '排' + data.seat + '座');
        //打印设置
        //打印方向 1纵向2横向
        var intOrient = 2;
        var pageWidth = '90mm';
        var pageHieght = '160mm';
        LODOP.SET_PRINT_PAGESIZE(intOrient, pageWidth, pageHieght, 'CreateCustomPage');
        LODOP.ADD_PRINT_HTM('16mm', '40mm', '80mm', '16mm', title);
        LODOP.ADD_PRINT_HTM('28mm', '40mm', '80mm', '70mm', content);
        LODOP.ADD_PRINT_HTM('16mm', '122mm', '16mm', '40mm', attr);
        LODOP.ADD_PRINT_HTM('16mm', '142mm', '16mm', '40mm', attr);
        LODOP.ADD_PRINT_HTM('74mm', '10.5mm', '150mm', '10mm', remark);
        LODOP.ADD_PRINT_HTM('39mm', '7.5mm', '30mm', '30mm', isGive);
        LODOP.ADD_PRINT_BARCODE('18mm', '10.5mm', '30mm', '30mm', 'QRCode', data.qrcode);
        LODOP.ADD_PRINT_HTM('6.5mm', '40mm', '40mm', '50mm', logo_title);
        LODOP.ADD_PRINT_IMAGE('3.5mm', '58mm', 200, 45, logo); //上下、左右、长度、宽度
        LODOP.SET_PRINT_STYLEA(0, 'Stretch', 2);
        LODOP.PRINT();
        // LODOP.PREVIEW();
    } catch (err) {
        console.log(err);
    }
}