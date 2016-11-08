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
