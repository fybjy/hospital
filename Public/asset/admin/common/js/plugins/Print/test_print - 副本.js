//文宝保打印设置
function testPrints() {
    var logo = $('#print_logo').html();
    var attr = $('#test_print_template_attr').html();
    var title = $('#test_print_template_title').html();
    var content = $('#test_print_template').html();
    var remark = $('#test_print_template_remark').html();
    try {
        var LODOP = getLodop();
        LODOP.PRINT_INIT('邮政票务打印系统_玄天清韵·圆梦中华第十六届道教音乐汇演_ 19排7座');
        //打印设置
        //打印方向 1纵向2横向
        var intOrient = 2;
        var pageWidth = '90mm';
        var pageHieght = '160mm';
        LODOP.SET_PRINT_PAGESIZE(intOrient, pageWidth, pageHieght, 'CreateCustomPage');
        LODOP.ADD_PRINT_HTM('22mm', '40mm', '80mm', '16mm', title);
        LODOP.ADD_PRINT_HTM('32mm', '40mm', '80mm', '70mm', content);
        LODOP.ADD_PRINT_HTM('20mm', '122mm', '16mm', '40mm', attr);
        LODOP.ADD_PRINT_HTM('20mm', '142mm', '16mm', '40mm', attr);
        LODOP.ADD_PRINT_HTM('74mm', '10.5mm', '150mm', '10mm', remark);
        LODOP.ADD_PRINT_HTM('41mm', '7.5mm', '30mm', '30mm', '');
        LODOP.ADD_PRINT_BARCODE('22mm', '10.5mm', '30mm', '30mm', 'QRCode', 'http://static.weiwubao.com/upload/image/20160701/qrcode_1467350829.png');
        LODOP.ADD_PRINT_IMAGE('3.5mm', '40mm', 200, 45, logo); //上下、左右、长度、宽度
        LODOP.SET_PRINT_STYLEA(0, 'Stretch', 2);
        LODOP.PRINT();
        // LODOP.PREVIEW();
    } catch (err) {
        console.log(err);
    }
}