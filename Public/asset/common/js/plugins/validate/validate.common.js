/**
 * Created by xingke on 2016/5/5.
 * validate 公共函数
 */

//验证是否是中文
jQuery.validator.addMethod("chinese", function(value, element) {
    var chinese = /^[\u4e00-\u9fa5]+$/;
    return this.optional(element) || (chinese.test(value));
}, "只能输入中文");

//验证手机号码格式
jQuery.validator.addMethod("mobile", function(value, element) {
    var length = value.length;
    var mobile = /^(((13[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})||(18[0-9]{1}))+\d{8})$/
    return this.optional(element) || (length == 11 && mobile.test(value));
}, "手机号码格式错误");

//验证QQ号码
jQuery.validator.addMethod("qq", function(value, element) {
    var tel = /^[1-9]\d{4,10}$/;
    return this.optional(element) || (tel.test(value));
}, "qq号码格式错误");

// 邮政编码验证
jQuery.validator.addMethod("zip", function(value, element) {
    var tel = /^[0-9]{6}$/;
    return this.optional(element) || (tel.test(value));
}, "请正确填写您的邮政编码");

// 电话号码验证
jQuery.validator.addMethod("tel", function(value, element) {
    var tel = /^d{3,4}-?d{7,9}$/;    //电话号码格式023-12345678  12345678
    return this.optional(element) || (tel.test(value));
}, "请正确填写您的电话号码");

// 联系电话(手机/电话皆可)验证
jQuery.validator.addMethod("tel_mobile", function(value,element) {
    var length = value.length;
    var mobile = /^(((13[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})||(18[0-9]{1}))+\d{8})$/;
    var tel = /^d{3,4}-?d{7,9}$/;
    return this.optional(element) || (tel.test(value) || mobile.test(value));
}, "请正确填写您的联系电话");

//身份证号码验证
jQuery.validator.addMethod("id_card", function(value, element){
    return this.optional(element) || isIdCardNo(value);
}, "请正确输入身份证号码");

//身份证需要函数
function isIdCardNo(num) {

    var factorArr = new Array(7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2,1);
    var parityBit= new Array('1','0','X','9','8','7','6','5','4','3','2');
    var varArray = new Array();
    var intValue;
    var lngProduct = 0;
    var intCheckDigit;
    var intStrLen = num.length;
    var idNumber = num;
    if ((intStrLen != 15) && (intStrLen!= 18)) {
        return false;
    }

    for(i=0;i<intStrLen;i++) {
        varArray[i] = idNumber.charAt(i);
        if ((varArray[i] < '0' || varArray[i]> '9') && (i != 17)){
            return false;
        } else if (i < 17) {
            varArray[i] = varArray[i] * factorArr[i];
        }
    }
    if (intStrLen == 18) {
        var date8 = idNumber.substring(6,14);
        if (isDate8(date8) == false) {
            return false;
        }
        for(i=0;i<17;i++) {
            lngProduct = lngProduct + varArray[i];
        }
        intCheckDigit = parityBit[lngProduct % 11];
        if (varArray[17] != intCheckDigit) {
            return false;
        }
    }
    else{
        var date6 = idNumber.substring(6,12);
        if (isDate6(date6) == false) {
            return false;
        }
    }
    return true;
}

function isDate6(sDate) {
    if(!/^[0-9]{6}$/.test(sDate)) {
        return false;
    }
    var year, month, day;
    year = sDate.substring(0, 4);
    month = sDate.substring(4, 6);
    if (year < 1700 || year > 2500)return false
    if (month < 1 || month > 12) returnfalse
    return true
}

function isDate8(sDate) {
    if(!/^[0-9]{8}$/.test(sDate)) {
        return false;
    }
    var year, month, day;
    year = sDate.substring(0, 4);
    month = sDate.substring(4, 6);
    day = sDate.substring(6, 8);
    var iaMonthDays = [31,28,31,30,31,30,31,31,30,31,30,31]
    if (year < 1700 || year > 2500)return false
    if (((year % 4 == 0) && (year % 100!= 0)) || (year % 400 == 0)) iaMonthDays[1]=29;
    if (month < 1 || month > 12) returnfalse
    if (day < 1 || day >iaMonthDays[month - 1]) return false
    return true
}