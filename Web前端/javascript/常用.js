// js获取客户端当前时间的秒数(unix时间戳)
var d = new Date();
var time = parseInt(d.getTime() / 1000);
alert('当前的时间戳是:' + time);

// 判断checkbox是否被选中
if ($('input[type="checkbox"]').is(':checked')) {
    alert('当前checkbox是选中状态');
} else {
    alert('当前checkbox没有被选中');
}

// 将checkbox选中或取消选中,使用prop()可以尽量避免兼容性问题
$('input[type="checkbox"]').prop('checked', true);  // 选中
$('input[type="checkbox"]').prop('checked', false); // 取消选中

// 获取选中的单选框的值
$('input:radio:checked').val();
$('input[type="radio"]:checked').val();
$('input[name="gender"]:checked').val();

// 如果有上一个页面就跳转到上一个页面,如果没有就关闭窗口
if (history.length > 1) {
    history.back();
} else {
    window.close();
    // WeixinJSBridge.call('closeWindow'); // 微信浏览器专用
}

// 循环把json对象插入到数组中
$.ajax({
    type : POST,
    url : index.html,
    success : function (data) {
        if (data.errno == 200) {
            var orderData = data.orderData;
            var orderArray = new Array();
            for (var i in orderData) {
                orderArray[] = { username : orderData[i]['username'], headimg : orderData[i]['headimg'] };
                // do other thing here
            }
        }
    }
});

