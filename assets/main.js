var menu_btn = $('.menu-btn');
var menu = $('.menu');

function openMenu() {
    menu_btn.attr('onclick', 'closeMenu()'); 
    menu_btn.removeClass('fa-bars');
    menu_btn.addClass('fa-times');
    menu_btn.addClass('btn-anim');
    menu.fadeIn('fast');
    $('body').css('overflow', 'hidden');
}

function closeMenu()  {
    menu_btn.attr('onclick', 'openMenu()');
    menu_btn.removeClass('fa-times');
    menu_btn.addClass('fa-bars');
    menu.fadeOut('fast');
    menu_btn.removeClass('btn-anim');
    $('body').css('overflow', 'scroll');
}

// Slider

var btn_right = $('#btn-right');
var btn_left = $('#btn-left');
var index_item = $('.index-item');
index = 0;

btn_right.click(function() {
    
    index++;

    index_item.eq(index-1).removeClass('current');
    index_item.eq(index).addClass('current');

    if(index > index_item.length - 1) {
        index = 0;
        index_item.eq(index).addClass('current');
    }
});

btn_left.click(function() {

    index--;

    index_item.eq(index+1).removeClass('current');
    index_item.eq(index).addClass('current');

    if(index < 0) {
        index = index_item.length - 1;
    }
});
