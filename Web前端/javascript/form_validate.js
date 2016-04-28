$(function(){
    var formObj = $('form');
    var submitBtn = $('#submitBtn');
    submitBtn.click(function(){
        if (validate(formObj)){
            formObj.submit();
        } else {
            alert('请将表单信息填写完整');
        }    
    });
    
    function validate(formObj){
        var result = true;
        formObj.find('input[type="text"],select,textarea').filter('[required="required"]').each(function(){
            if ($.trim($(this).val()) == '') {
                result = false;
                $(this).css('border', '1px solid red');
            }
        });
        return result;
    }
});
