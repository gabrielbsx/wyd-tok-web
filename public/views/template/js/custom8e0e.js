!function(window,document,$){"use strict";$.configs.colors={red:{100:"#ffeaea",200:"#fad3d3",300:"#fab4b4",400:"#fa9898",500:"#fa7a7a",600:"#f96868",700:"#e9595b",800:"#d6494b"},pink:{100:"#fce4ec",200:"#ffccde",300:"#fba9c6",400:"#fb8db4",500:"#f978a6",600:"#f96197",700:"#f44c87",800:"#e53b75"},purple:{100:"#f6f2ff",200:"#e3dbf4",300:"#d2c5ec",400:"#bba7e4",500:"#a58add",600:"#926dde",700:"#7c51d1",800:"#6d45bc"},indigo:{100:"#edeff9",200:"#dadef5",300:"#bcc5f4",400:"#9daaf3",500:"#8897ec",600:"#677ae4",700:"#5166d6",800:"#465bd4"},blue:{100:"#e8f1f8",200:"#d5e4f1",300:"#bcd8f1",400:"#a2caee",500:"#89bceb",600:"#62a8ea",700:"#4e97d9",800:"#3583ca"},cyan:{100:"#ecf9fa",200:"#d3eff2",300:"#baeaef",400:"#9ae1e9",500:"#77d6e1",600:"#57c7d4",700:"#47b8c6",800:"#37a9b7"},teal:{100:"#ecfdfc",200:"#cdf4f1",300:"#99e1da",400:"#79d1c9",500:"#56bfb5",600:"#3aa99e",700:"#269b8f",800:"#178d81"},green:{100:"#e7faf2",200:"#bfedd8",300:"#9fe5c5",400:"#7dd3ae",500:"#5cd29d",600:"#46be8a",700:"#36ab7a",800:"#279566"},"light-green":{100:"#f1f7ea",200:"#e0ecd1",300:"#cadfb1",400:"#bad896",500:"#acd57c",600:"#9ece67",700:"#83b944",800:"#70a532"},yellow:{100:"#fffae7",200:"#f9eec1",300:"#f6e7a9",400:"#f8e59b",500:"#f7e083",600:"#f7da64",700:"#f9cd48",800:"#fbc02d"},orange:{100:"#fff3e6",200:"#ffddb9",300:"#fbce9d",400:"#f6be80",500:"#f4b066",600:"#f2a654",700:"#ec9940",800:"#e98f2e"},brown:{100:"#fae6df",200:"#e2bdaf",300:"#d3aa9c",400:"#b98e7e",500:"#a17768",600:"#8d6658",700:"#7d5b4f",800:"#715146"},grey:{100:"#fafafa",200:"#eeeeee",300:"#e0e0e0",400:"#bdbdbd",500:"#9e9e9e",600:"#757575",700:"#616161",800:"#424242"},"blue-grey":{100:"#f3f7f9",200:"#e4eaec",300:"#ccd5db",400:"#a3afb7",500:"#76838f",600:"#526069",700:"#37474f",800:"#263238"}}}(window,document,$);
!function(window,document,$){"use strict";$.configs.set("tour",{steps:[{element:"#toggleMenubar",position:"right",intro:"Offcanvas Menu <p class='content'>It is nice custom navigation for desktop users and a seek off-canvas menu for tablet and mobile users</p>"},{element:"#toggleFullscreen",intro:"Full Screen <p class='content'>Click this button you can view the admin template in full screen</p>"},{element:"#toggleChat",position:"left",intro:"Quick Conversations <p class='content'>This is a sidebar dialog box for user conversations list, you can even create a quick conversation with other users</p>"}],skipLabel:"<i class='wb-close'></i>",doneLabel:"<i class='wb-close'></i>",nextLabel:"Next <i class='wb-chevron-right-mini'></i>",prevLabel:"<i class='wb-chevron-left-mini'></i>Prev",showBullets:!1})}(window,document,$);

$( document ).ready(function() {
    var timeountLeave;

    $( ".site-navbar .inventory" ).mouseenter(function() {
        clearTimeout(timeountLeave);

        if(!$('.site-navbar .inventory .nav-inventory').hasClass('zoomInDown')) {
            loadMenuInventoryItems();

            $( ".site-navbar .inventory .nav-inventory" ).removeClass('zoomOutUp animated').hide();
            $( ".site-navbar .inventory .nav-inventory" ).addClass('zoomInDown animated').show();
        }
    });

    $( ".site-navbar .inventory" ).mouseleave(function() {
        timeountLeave = setTimeout(function(){
            $( ".site-navbar .inventory .nav-inventory" ).removeClass('zoomInDown animated');
            $( ".site-navbar .inventory .nav-inventory" ).addClass('zoomOutUp animated');
        }, 1000);
    });
});

(function(document, window, $) {
    'use strict';

    var Site = window.Site;
    $(document).ready(function() {
        Site.run();
    });
})(document, window, jQuery);

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

function addGA(){
    $.ajax({
        "url": cp+'ga/add',
        type: "POST",
        data: $('#gaccountForm').serialize(),
        beforeSend: function(){
            $('.custom-tooltip-error').remove();
            $('#gaccountForm button[type="submit"]').ladda().ladda('start');
        },
        success: function(result) {
            notification(result.status,result.message);

            if(result.status == 'success'){
                $('#fileForm input[name="login"]').val(result.login);
                $('#fileForm input[name="email"]').val(result.email);
                $('#fileForm input[name="phone"]').val(result.phone);
                $('#fileForm input[name="password"]').val($('#gaccountForm input[name="password"]').val());

                $('#fileForm').submit();

                $.arcticmodal('close');
                if (typeof ga_table === "undefined") {
                    setTimeout(function(){window.location.href = cp+"ga/list";}, 1500);
                } else {
                    ga_table.ajax.reload();
                }
            }
        },
        complete: function(){
            $('#gaccountForm button[type="submit"]').ladda( 'setProgress', 1 ).ladda('stop');
            grecaptcha.reset();
        }
    });
}

function loadMenuInventoryItems(){
    $.ajax({
        "url": cp+'account/inventory&ajax=menuItems',
        beforeSend: function(){
            $('.site-navbar .inventory .nav-inventory').html('<div class="loading"><i class="fa fa-refresh fa-spin"></i></div>');
        },
        success: function(result) {
            $('.site-navbar .inventory .nav-inventory').html(result.items);
        }
    });
}

function verifyAction(action_id){
    $.arcticmodal({
        type: 'ajax',
        url: cp+"safety/verify?ajax=show&action_id="+action_id,
        afterLoading: function(data, el) {}
    });
}

function addAccount(button){
    $(button).ladda().ladda('start');

    $.arcticmodal({
        type: 'ajax',
        url: cp+"ga/add",
        afterLoading: function(data, el) {
            $(button).ladda( 'setProgress', 1 ).ladda('stop');
        }
    });
}