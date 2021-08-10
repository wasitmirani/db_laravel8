

/* Portfolio */
$(document).ready(function(){
  $(".lightbox").click(function(){
    $(".backdrop").animate({"opacity": ".70"}, 500);
    $(".box").animate({"opacity": "1.0"}, 500);
    $(".backdrop, .box").css("display", "block");
  });
  
  $(".thumb").click(function(){
    var largeImage = $(this).attr("src");
    $(".largeImage").attr({src: largeImage});
  });
  
  $(".close").click(function(){
    closeBox();
  });
  
  $(".backdrop").click(function(){
    closeBox();
  });
});

function closeBox(){
  $(".backdrop, .box").animate({"opacity": "0"}, 500, function(){
  $(".backdrop, .box").css("display", "none");
  });
}
/* Portfolio */
/*Testomial*/
$( document ).ready(function($) {
$('#testimonials').slick({
dots: false,
arrows: false,
infinite: true,
speed: 1000,
slidesToShow: 1,
loop: true,
autoplay: true,
speed:2000,
//rows: 2,
slidesToScroll: 1,
responsive: [
{
breakpoint: 1200,
settings: {
//slidesPerRow: 1,
slidesToScroll: 1,
slidesToShow: 1,
//rows: 2,
dots: false
}
},
{
breakpoint: 480,
settings: {
//slidesPerRow: 1,
slidesToScroll: 1,
slidesToShow: 1,
//rows: 1,
dots: false
}
}
]
});
});
/*Testomial*/

/*Menu*/
$(".menu-bottom").on("click",function(){$("html").toggleClass("menu-open")});
$(".menu-bottom").click(function(){$(this).toggleClass("click")});
/*Menu*/
    $('.loginUp').click(function(){
        $('#popuprequest').fadeIn();
        $('.overlay').fadeIn();
        var orgtexts = '$19';
        $(".centercont h3").text('Get Custom Website Design ');
      $(".centercont h4").html("in Just <span>" + orgtexts + "</span>");

    });
         $('.closeico,.overlay').click(function(){
        $('#popuprequest').fadeOut();
        $('.overlay').fadeOut();
    });

    $('.closeico1,.overlay').click(function(){
        $('#popuppack').fadeOut();
        $('.overlay').fadeOut();
    });

    $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".fixed").addClass("sticky");
    } else {
        $(".fixed").removeClass("sticky");
    }
});

$(document).ready(function() {
  $("#nav1 li").hover(
    function() {
      $(this).find('ul').slideDown();
    },
    function() {
      $(this).find('ul').slideUp();
    });
});