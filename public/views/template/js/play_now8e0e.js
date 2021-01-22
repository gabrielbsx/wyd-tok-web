$('#gaCheckbox').click(function() {
    if ($(this).is(':checked')) {
        $('#createGa').show();
    } else {
        $('#createGa').hide();
    }
});

$('input[type=radio][name=registerType]').iCheck({
    checkboxClass: 'icheckbox_futurico',
    radioClass: 'iradio_futurico',
    increaseArea: '20%' // optional
});

$('input[type=radio][name=registerType]').on('ifChecked', function(event){
    if ($(event.target).val() == 'email') {
        $('#smsTypeBlock').hide();
        $('#smsTypeBlock').find("input").val("");
        $('#emailTypeBlock').show();
    } else {
        $('#emailTypeBlock').hide();
        $('#emailTypeBlock').find("input").val("");
        $('#smsTypeBlock').show();
    }
});

$('input[type=radio][name=radio]').change(function() {
    if (this.value == 'email') {
        $('#smsTypeBlock').hide();
        $('#smsTypeBlock').find("input").val("");
        $('#emailTypeBlock').show();
    } else if (this.value == 'phone') {
        $('#emailTypeBlock').hide();
        $('#emailTypeBlock').find("input").val("");
        $('#smsTypeBlock').show();
    }
});

$('input[type=radio][name=radio]').on('ifChecked', function(event){
    if ($(event.target).val() == 'email') {
        $('#smsTypeBlock').hide();
        $('#smsTypeBlock').find("input").val("");
        $('#emailTypeBlock').show();
    } else {
        $('#emailTypeBlock').hide();
        $('#emailTypeBlock').find("input").val("");
        $('#smsTypeBlock').show();
    }
});

$("#registerForm").submit(function(event){
    event.preventDefault();

    $.ajax({
        "url": cp_url+'auth/register',
        type: "POST",
        data: $('#registerForm').serialize(),

        beforeSend: function(){
            $('.custom-tooltip-error').remove();
            $('#registerForm button[type="submit"]').ladda().ladda('start');
        },
        success: function(result) {
            if(result.status == 'error'){
                formErrorTip(result.element,result.message);
            } else {
                if(result.login != null){
                    $('#fileForm input[name="login"]').val(result.login);
                }

                if($('#emailType').is(':checked')){
                    $('#fileForm input[name="email"]').val($('#registerForm input[name="email"]').val());
                } else {

                    $('#fileForm input[name="phone"]').val('+'+$('#registerForm select[name="country"]').val()+$('#registerForm input[name="phone"]').val());
                }

                $('#fileForm input[name="password"]').val($('#registerForm input[name="password"]').val());

                if(result.save){
                    $('#fileForm').submit();
                }

                $('#registerForm').html(result.body);
                $('#registerForm').html(result.body);
            }
        },
        complete: function(){
            $('#registerForm button[type="submit"]').ladda( 'setProgress', 1 ).ladda('stop');
            grecaptcha.reset();
        }
    });

    return false;
});

function sendSms(){
    console.log($('input[name="g-recaptcha-response"]').val());

    $.ajax({
        "url": cp_url+'/auth/register?ajax=sendSms',
        type: "POST",
        data: {country:$('select[name="country"]').val(),phone:$('#registerForm input[name="phone"]').val(),grecaptcharesponse:$('textarea[name="g-recaptcha-response"]').val()},
        beforeSend: function(){
            $('.custom-tooltip-error').remove();
            $('#send_sms_button').ladda().ladda('start');
        },
        success: function(result) {
            notification(result.status,result.message,5000);
        },
        complete: function(){
            $('#send_sms_button').ladda( 'setProgress', 1 ).ladda('stop');
            grecaptcha.reset();
        }
    });
}