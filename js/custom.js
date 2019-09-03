// // Mobile Menu - Getting height of active menu for drop down effect
$(document).ready(function() {
    // var $window = $(window);
    // function checkWidth() {
    //     var windowsize = $window.width();
    //     if (windowsize < 768) {
    //         var menu = document.querySelector('.menu_icon');
    //         function toggleMenu () {
    //             menu.classList.toggle('open');
    //             if ($('.menu_wrapper').hasClass("active")){
    //                 $('.menu_wrapper').removeClass("active");
    //             }
    //             else{
    //                 $('.menu_wrapper').addClass("active");
    //             }
    //         }
    //         menu.addEventListener('click', toggleMenu);
    //     }
    //     else{
    //         $('.menu_wrapper').removeClass("active");
    //     }
    // }
    // checkWidth();
    // $(window).resize(checkWidth);

    var menu = document.querySelector('.menu_icon');
    function toggleMenu () {
        menu.classList.toggle('open');
        if ($('.menu_wrapper').hasClass("active")){
            $('.menu_wrapper').removeClass("active");
        }
        else{
            $('.menu_wrapper').addClass("active");
        }
    }
    menu.addEventListener('click', toggleMenu);

    var $window = $(window);
    function checkWidth(){
        var windowsize = $window.width();
        if (windowsize > 768) {
            $('.menu_icon').removeClass("open");
            $('.menu_wrapper').removeClass("active");
        }
    }
    checkWidth();
    $(window).resize(checkWidth);


    var mySwiper21 = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        observer: true,
        observeParents: true,
        loop: true,
        preloadImages: true,
        updateOnImagesReady: true,
        grabCursor: true,
        pagination: {
            el: '.swiper-pagination',
        },
        autoplay: true,
      });
});

var pp = document.querySelector('.privacy_policy');
function openPrivacy () {
  $('.pp_section').addClass('active');
}
pp.addEventListener('click', openPrivacy);

var ppl = document.querySelector('.privacy_policy_link');
function openPrivacy () {
  $('.pp_section').addClass('active');
}
ppl.addEventListener('click', openPrivacy);

var ppli = document.querySelector('.liability');
function openPrivacy () {
  $('.pp_section').addClass('active');
}
ppli.addEventListener('click', openPrivacy);

var closeIcon = document.querySelector('.close_icon');
function closePrivacy() {
  $('.pp_section').removeClass('active');
}
closeIcon.addEventListener('click', closePrivacy);

$("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});

// Accordian transition effect
$('.faq_inside_wrapper').each(function(){
    $(this).find('.faq_content_wrapper').css("height", 0);
  });

$('.faq_question').click(function(){
    $('.faq_question').find('.faq_question_heading').css("color", "#39414f");
    $('.faq_question').next().find('.faq_content_wrapper_inside').css("color", "#39414f");
    $(this).find('.faq_question_heading').css("color", "#2a70b7");
    $(this).next().find('.faq_content_wrapper_inside').css("color", "#2a70b7");
    heightofContentWrapper = $(this).next().outerHeight();
    heightOfContent = $(this).next().find('.faq_content_wrapper_inside').outerHeight();
    if (heightofContentWrapper === 0 ){
        $(this).next().css("height", heightOfContent);
        $(this).next().css("transition", "all 0.4s");
        $(this).next().css("padding", "10px 0px 30px");
        $(this).find("img").attr('src', stylesheet_directory_uri + '/images/accordion_minus.png');
    }
    else{
        $(this).next().css("height", 0);
        $(this).next().css("padding", "0px");
        $(this).find("img").attr('src', stylesheet_directory_uri + '/images/accordion_plus.png');
    }
});

$('.banner_info').eq(0).addClass('active');
$('.spotta_tabs').eq(0).addClass('active');
$('.spotta_content').eq(0).addClass('active'); 

$('.spotta_tabs').on('click', function(e) {
    var positionOfElement = $(this).index();
    $('.spotta_tabs').removeClass('active');
    $('.spotta_tabs.active').removeAttr("style");
    $(this).addClass('active');
    $('.banner_info').removeClass('active');        
    $('.banner_info').eq(positionOfElement).addClass('active');
    $('.spotta_content').removeClass('active');        
    $('.spotta_content').eq(positionOfElement).addClass('active'); 
});

$('ul#menu-main-menu li.menu-item a').on('click', function(e) {
    $('ul#menu-main-menu li.menu-item a').removeClass("active");
    $(this).addClass("active");
});

var heightOfHeader = $('#header').outerHeight();
$(window).scroll(function() {
    if ($(this).scrollTop() > 114) {
        $("#header").addClass("sticky");
        $('.page_content').css("padding-top", heightOfHeader);
    }
    else {
        $("#header").removeClass("sticky");
        $('.page_content').css("padding-top", 0);
    }
});