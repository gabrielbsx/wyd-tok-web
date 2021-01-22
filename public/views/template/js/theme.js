$('ul.menu.flex').flexMenu();
$('ul.menu.flex-multi').flexMenu({
    showOnHover: false
})

var width2 = 185;
var count2 = 1;

var width3 = 298;
var count3 = 1;

var video = document.getElementById('video');
var list2 = video.querySelector('ul');
var listElems2 = video.querySelectorAll('li');

var r_video = document.getElementById('rvideo');
var r_list2 = r_video.querySelector('ul');
var r_listElems2 = r_video.querySelectorAll('li');

var position = 0;
var rposition = 0;

video.querySelector('.prev-t').onclick = function() {
    position = Math.min(position + width2 * count2, 0)
    list2.style.marginLeft = position + 'px';
};

video.querySelector('.next-t').onclick = function() {
    position = Math.max(position - width2 * count2, -width2 * (listElems2.length - count2));
    list2.style.marginLeft = position + 'px';
};

r_video.querySelector('.prev-t').onclick = function() {
    rposition = Math.min(rposition + width3 * count3, 0)
    r_list2.style.marginLeft = rposition + 'px';
};

r_video.querySelector('.next-t').onclick = function() {
    rposition = Math.max(rposition - width3 * count3, -width3 * (r_listElems2.length - count3));
    r_list2.style.marginLeft = rposition + 'px';
};

$(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop:0},800);
    });
});