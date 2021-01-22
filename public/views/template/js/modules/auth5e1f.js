if(window.location.hash) {
    var hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
    $('#authData').val(hash);
    $('#authForm').submit();
}

$( document ).ready(function() {
    $('input[type=radio][name=registerType],input[type=radio][name=method]').change(function() {
        if (this.value == 'email') {
            $('#smsTypeBlock').hide();
            $('#smsTypeBlock').find("input").val("");
            $('#emailTypeBlock').show();
        } else {
            $('#emailTypeBlock').hide();
            $('#emailTypeBlock').find("input").val("");
            $('#smsTypeBlock').show();
        }
    });
    $('.select').selectpicker();
    $('#gaCheckbox').click(function() {
        if ($(this).is(':checked')) {
            $('#createGa').show();
        } else {
            $('#createGa').hide();
        }
    });
});


function doLogin(){
    $.ajax({
        "url": cp+'auth/login',
        type: "POST",
        data: $('#loginForm').serialize(),
        beforeSend: function(){
            $('.custom-tooltip-error').remove();
            $('#loginForm button[type="submit"]').ladda().ladda('start');
        },
        success: function(result) {
            //console.log(result);
            
            if(result.status == 'error'){
                formErrorTip(result.element,result.message);

                $('#loginForm button[type="submit"]').ladda( 'setProgress', 1 ).ladda('stop');
            } else {
                //console.log(result);
                if(result.show_code == 1){
                    $('.g-recaptcha, .g-recaptcha-tip').remove();

                    $('#loginForm input[name="email"],#loginForm input[name="phone"], #loginForm input[name="password"]').prop('readonly',true);
                    $('#notify_contact').html(result.send_to);
                    $('input[name="code"]').val('');
                    $('#loginHash').val(result.hash);

                    $('#codeBlock').show();

                    $('#loginForm button[type="submit"]').ladda( 'setProgress', 1 ).ladda('stop');
                } else {
                    notification(result.status,result.message,5000);

                    location.reload();
                }

            }
        },
        complete: function(){
            grecaptcha.reset();
        }
    });
}

function doRegister(){
    $.ajax({
        "url": cp+'auth/register',
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

                $('.login-form').html(result.body);
            }
        },
        complete: function(){
            $('#registerForm button[type="submit"]').ladda( 'setProgress', 1 ).ladda('stop');
            grecaptcha.reset();
        }
    });
}

function sendSms(){
    $.ajax({
        "url": cp+'/auth/register?ajax=sendSms',
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

function forgotPrefix(){
    $.ajax({
        "url": cp+'/auth/prefix?ajax=sendData',
        type: "POST",
        data: $('#prefixForm').serialize(),
        beforeSend: function(){
            $('.custom-tooltip-error').remove();
            $('#prefixForm button[type="submit"]').ladda().ladda('start');
        },
        success: function(result) {
            if(result.status == 'error'){
                formErrorTip(result.element,result.message);
            } else {
                $('.login-form').html(result.body);
            }
        },
        complete: function(){
            $('#prefixForm button[type="submit"]').ladda( 'setProgress', 1 ).ladda('stop');
            grecaptcha.reset();
        }
    });
}

function forgotPassword(button){
    $.ajax({
        "url": cp+'/auth/forgot?ajax=sendData',
        type: "POST",
        data: $('#forgotForm').serialize(),
        beforeSend: function(){
            $('.custom-tooltip-error').remove();
            $(button).ladda().ladda('start');
        },
        success: function(result) {
            if(result.status == 'error'){
                if((typeof(result.sms_code) != 'undefined')){
                    $('.sms-confirm').show();

                    $('#forgotForm input[name="code"]').val('');

                    $('.g-recaptcha, .g-recaptcha-tip').remove();
                    $('#forgotForm button[type="submit"]').remove();
                }

                formErrorTip(result.element,result.message);
            } else {
                $('.login-form').html(result.body);
            }
        },
        complete: function(){
            $(button).ladda( 'setProgress', 1 ).ladda('stop');
            grecaptcha.reset();
        }
    });
}