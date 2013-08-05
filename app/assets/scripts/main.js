window.scrollTo(0,1);

$('.nav-open').click(function(e) {
    e.preventDefault();
    $('.site-nav').toggleClass('active');
    $(this).toggleClass('active');
});