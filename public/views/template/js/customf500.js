$(function()
{
    $('.about-tab').hide().eq(0).show();

    $('.about-menu li').on('click',function(){
        console.log($(this).data('index'));
        $('.about-tab').hide().eq($(this).data('index')).show();
    });

    $('.about-list-block .spoiler').on('click',function(){
        $('.about-list-block .spoiler-info').slideUp();
        if($(this).find('.spoiler-info').css('display')=='none')
        {
            $(this).find('.spoiler-info').slideDown();
        }
    });

});



function formErrorTip(element, message){
    $(element).attr('data-original-title', message)
        .tooltip({trigger: 'manual',placement: 'top'}).tooltip('show').change(function(){$(this).tooltip('destroy');}).focus().data('bs.tooltip')
        .tip()
        .addClass('custom-tooltip-error');
}

function notification(type,msg,timeout){
    //types: alert, information, error, warning, notification, success
    var n = noty({
        text        : msg,
        type        : type,
        dismissQueue: true,
        layout      : 'topRight',
        theme       : 'defaultTheme',
        closeWith   : ['button', 'click'],
        maxVisible  : 10,
        timeout:timeout,
        modal       : false,
        animation   : {
            open  : 'animated flipInX',
            close : 'animated flipOutX',
            easing: 'swing',
            speed : 500
        }
    });
}

function signIn(){
    $.arcticmodal({
        type: 'ajax',
        url: "/auth/login",
        afterLoading: function(data, el) {}
    });
}

function signUp(){
    $.arcticmodal({
        type: 'ajax',
        url: "/auth/register",
        afterLoading: function(data, el) {}
    });
}

function serviceSoon(date){
    $.arcticmodal({
        type: 'ajax',
        url: "/services/soon?date="+date,
        afterLoading: function(data, el) {}
    });
}

function serviceAlert(){
    /*if (typeof $.cookie('alert') === 'undefined'){
        $.arcticmodal({
            type: 'ajax',
            url: "/services/alert",
            afterLoading: function(data, el) {}
        });

        $.cookie('alert',1,{ expires: 3, path: '/' });
    }*/
}

$("#getting-started")
    .countdown("2018/02/09", function(event) {
        $(this).text(
            event.strftime('%D days %H:%M:%S')
        );
    });
