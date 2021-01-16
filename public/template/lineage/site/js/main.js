var sliderTimer,
    lwSliderTimer,
    lwSliderTimeOut = 20000;


$(window).load(function(){
    $('#sliderWrapper > img').first().css('margin-left', -1*$('#sliderWrapper > img').first().width()/2);
    $('.sliderSmallBlock > .wrapper > ul').width($('.sliderSmallBlock > .wrapper > ul > li').length*(91+7)-7);

    $('.section > .header, .blockWithIMGHeader > .header, .midSizeContent > .header').each(function(){
        $(this).css('margin-left', -1*$(this).width()/2);
    });
    $('.wrapperLWSlider ul').width($('.wrapperLWSlider ul').children('li').length*(80+13));
});

$(document).ready(function(){

    if($('body').find('#rateTable').length > 0) { $('body, html').animate({ scrollTop: $('body').find('#rateTable').offset().top }, 500); }
    if($('body').find('#regTable').length > 0) { $('body, html').animate({ scrollTop: $('body').find('#regTable').offset().top }, 500); }

    $('.discussItem').last().addClass('last');

    $('.lwSlider .rightArrow').on('click', function(){ lwSliderForward(); });
    $('.lwSlider .leftArrow').on('click', function(){ lwSliderBackward() });

    function lwSliderForward() {
        clearTimeout(lwSliderTimer);
        $('.lwSlider .rightArrow, .lwSlider .leftArrow').unbind();
        $('#lwSlider').animate({
                left: '-='+$('#lwSlider li').eq(0).width()
            },
            200, function(){
                $(this).css('left', 0);
                $('#lwSlider > li:first-child').insertAfter($('#lwSlider > li:last-child'));

            }).promise().done(function(){
            $('.lwSlider .rightArrow').on('click', function(){ lwSliderForward(); });
            $('.lwSlider .leftArrow').on('click', function(){ lwSliderBackward(); });
            lwSliderTimer = setTimeout(lwSliderForward, lwSliderTimeOut);
        });
    }
    function lwSliderBackward() {
        clearTimeout(lwSliderTimer);
        $('.lwSlider .rightArrow, .lwSlider .leftArrow').unbind();

        $('#lwSlider > li:last-child').insertBefore($('#lwSlider > li:first-child'));
        $('#lwSlider').css('left', -$('#lwSlider li').eq(0).width());

        $('#lwSlider').animate({
                left: '+='+$('#lwSlider li').eq(0).width()
            },
            200, function(){
                $(this).css('left', 0);

                $('.lwSlider .rightArrow').on('click', function(){ lwSliderForward(); });
                $('.lwSlider .leftArrow').on('click', function(){ lwSliderBackward() });
            }).promise().done(function(){
            $('.lwSlider .rightArrow').on('click', function(){ lwSliderForward(); });
            $('.lwSlider .leftArrow').on('click', function(){ lwSliderBackward(); });
            lwSliderTimer = setTimeout(lwSliderForward, lwSliderTimeOut);
        });
    }

    function sliderForward(listObject) {
        clearTimeout(sliderTimer);

        $('#sliderWrapper > img.bgfade').first().appendTo('#sliderWrapper').fadeOut(1000);
        $('#sliderWrapper > img').first().attr('src', $('#sliderWrapper').eq(2).attr('sliderIMG'));
        $('#sliderWrapper > img').first().css('margin-left', -1*$('#sliderWrapper > img').first().width()/2);
        $('#sliderWrapper > img').first().fadeIn(1000);

        $('#sliderClicker').animate({
                left: '-='+$('#sliderClicker li').eq(0).width()
            },
            200, function(){
                $(this).css('left', 0);
                $('#sliderClicker> li:first-child').insertAfter($('#sliderClicker > li:last-child'));

                $('#sliderClicker > li').unbind();
                $('#sliderClicker > li').eq(2).on('click', function(){ sliderForward($(this)); });
                $('#sliderClicker > li').eq(0).on('click', function(){ sliderBackward($(this)); });

                sliderTimer = setTimeout(sliderForward, lwSliderTimeOut);
            });
    }
    function sliderBackward(listObject) {
        clearTimeout(sliderTimer);

        $('#sliderWrapper > img.bgfade').first().appendTo('#sliderWrapper').fadeOut(1000);
        $('#sliderWrapper > img').first().attr('src', $('#sliderWrapper').eq(0).attr('sliderIMG'));
        $('#sliderWrapper > img').first().css('margin-left', -1*$('#sliderWrapper > img').first().width()/2);
        $('#sliderWrapper > img').first().fadeIn(1000);

        $('#sliderClicker > li:last-child').insertBefore($('#sliderClicker > li:first-child'));
        $('#sliderClicker').css('left', -$('#sliderClicker li').eq(0).width());

        $('#sliderClicker').animate({
                left: '+='+$('#sliderClicker li').eq(0).width()
            },
            200, function(){
                $(this).css('left', 0);

                $('#sliderClicker > li').unbind();
                $('#sliderClicker > li').eq(2).on('click', function(){ sliderForward($(this)); });
                $('#sliderClicker > li').eq(0).on('click', function(){ sliderBackward($(this)); });

                sliderTimer = setTimeout(sliderForward, lwSliderTimeOut);
            });
    }

    $('#sliderClicker > li').unbind();
    $('#sliderClicker > li').eq(2).on('click', function(){ sliderForward($(this)); });
    $('#sliderClicker > li').eq(0).on('click', function(){ sliderBackward($(this)); });

    sliderForward();
    $('.sortList li').on('click', function(){
        $('.sortList li').removeClass('active');
        $(this).addClass('active');
    });

    $('.serverSelect').find('li').on('click', function(){
        $(this).parents('.serverSelect').find('.serverName').html($(this).html());
        $(this).parents('ul').width($(this).parents('.serverSelect').children('span').width()+10);
        $('.serverSelect').removeClass('active');

        return false;
    });

    $('.checkbox').on('click',function(){
        $(this).toggleClass('active');
        if($(this).hasClass('active')) {
            $(this).find('input[type="checkbox"]')[0].checked = true;
        }
        else {
            $(this).find('input[type="checkbox"]')[0].checked = false;
        }
    });


    $('.serverSelect').on('click', function(){
        $(this).addClass('active');
    });
    $('.serverSelect').hover(function(){}, function(){
        $(this).removeClass('active');
    });

    LoadingNews('all', 1);

    jQuery('.page_navigator a').click(function(){
        var server_name = 'all';
        var page = $(this).attr('data-bind');
        var pages = $('.news_servers.' + server_name).attr('data-group');
        $(this).parent().siblings().removeClass('current');
        $(this).parent().addClass("current " + server_name);
        $(this).removeClass().addClass("page_active " + server_name);
        LoadingNews(server_name, page);
        return false;
    });


    $('body').on("click", '.submit-btn', function(){
        var el = $(this);

        var response_loc = el.parents('form').attr('name');
        var action = el.parents('form').attr('action');
        if(action === '')
            action = "/data/controllers";

        $.ajax({
            url: action,
            data: $(el).parents('form').serialize(),
            type: "POST",
            cache: false,
            dataType: 'json',
            beforeSend: function () {
                el.attr("disabled","disabled");
                bSpinner('play');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log("Result : " + xhr.responseText);
                bSpinner('stop');
            }
        }).done(function (msg) {
            if(msg.type == 'msg'){
                $.notij(msg.text , {'type': msg.status});

            }else{

                if (response_loc === undefined)
                    $('.show').html(msg.text);
                else
                    $('.show_' + response_loc).html(msg.text);

            }

            if(msg.location){
                setTimeout("document.location.href='/"+msg.location+"'", msg.time);
            }

            if(msg.eval){
                jQuery.globalEval( msg.eval );
            }


        }).always(function () {

            bSpinner('stop');
            setTimeout(function () {
                el.removeAttr("disabled");
            }, 500);

        });

    });


    var bSpinner = function(state){
        var $window, position, showSpinnerClass, spinner;

        spinner = $('.bSpinner');
        showSpinnerClass = 'bSpinner__mType_visible';
        position = {
            top: -40,
            left: -40
        };
        spinner.css(position);

        $window = $(window);
        if (state === 'play') {
            spinner.addClass(showSpinnerClass);
            $window.on("mousemove.bSpinnerPosition", function (evt) {
                position.top = evt.clientY + 8;
                position.left = evt.clientX + 8;
                spinner.css(position);
            });
        }else{
            $window.off("mousemove.bSpinnerPosition");
            spinner.removeClass(showSpinnerClass);
        }

    };


    $('.generate').click(function () {

        $.get("/data/prefix/get", function (data) {
            $('#register-prefix').val(data);
        });
    });

});







function LoadingNews(server_name, page){

    switch(server_name)
    {
        case 'all':  var server_id = -1; break;
        default: document.location.pathname = '/'; break;
    }
    var pages = parseInt($('.news_servers.' + server_name).attr('data-group'));
    var page_count = 4;
    var page_del = (page_count - 1) / 2;
    if (pages > page_count)
    {
        if ((pages - page) >= page_count)
        {
            if ((page - page_del) <= 0)
            {
                $('.page_unactive.' + server_name).hide();
                $('b.' + server_name).hide();
                for (var i = 1; i <= page_count; i++) {
                    $('.page_unactive.' + server_name + '[data-bind="' + i + '"], .page_active.' + server_name + '[data-bind="' + i + '"]').show();
                    if (i > 1)
                    {
                        $('b.' + server_name + '[data-bind="' + i + '"]').show();
                    }
                }
            }
            else
            {
                $('.page_unactive.' + server_name).hide();
                $('b.' + server_name).hide();
                for (var i = (page - page_del); i <= (parseInt(page) + page_del); i++) {
                    $('.page_unactive.' + server_name + '[data-bind="' + i + '"], .page_active.' + server_name + '[data-bind="' + i + '"]').show();
                    if (i > (page - page_del))
                    {
                        $('b.' + server_name + '[data-bind="' + i + '"]').show();
                    }
                }
            }
        }
        else
        {
            if ((parseInt(page) + page_del) >= pages)
            {
                $('.page_unactive.' + server_name).hide();
                $('b.' + server_name).hide();
                for (var i = (page - (page_count - (pages - page + 1))); i <= pages; i++) {
                    $('.page_unactive.' + server_name + '[data-bind="' + i + '"], .page_active.' + server_name + '[data-bind="' + i + '"]').show();
                    if (i > (page - (page_count - (pages - page + 1))))
                    {
                        $('b.' + server_name + '[data-bind="' + i + '"]').show();
                    }
                }
            }
            else
            {
                if ((page - page_del) >= 1)
                {
                    var page_start = page - page_del;
                    var page_end = parseInt(page) + page_del;
                }
                else
                {
                    var page_start = 1;
                    var page_end = parseInt(page) + page_del + 1;
                }
                $('.page_unactive.' + server_name).hide();
                $('b.' + server_name).hide();
                for (var i = page_start; i <= page_end; i++) {
                    $('.page_unactive.' + server_name + '[data-bind="' + i + '"], .page_active.' + server_name + '[data-bind="' + i + '"]').show();
                    if (i > page_start)
                    {
                        $('b.' + server_name + '[data-bind="' + i + '"]').show();
                    }
                }
            }
        }
    }
    $('#sliderWrapper > img').on('click', function(){ location.href = $('#sliderClicker > li').eq(0).attr('location'); });
    $('.page.' + server_name).hide();
    $('.news_servers').hide();
    $('.page.' + server_name + '[data-bind="' + page + '"]').show();
    $('.news_servers.' + server_name).show();









};