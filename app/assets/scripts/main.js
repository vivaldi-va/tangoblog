window.scrollTo(0,1);

$('.nav-open').click(function(e) {
    e.preventDefault();
    $('.site-nav').toggleClass('active');
    $(this).toggleClass('active');
});

$('#contact-form').submit(function(e){
    e.preventDefault();
    $(this).find('button[type="submit"]').attr('disable', 'true').html('Sending... <i class="icon-refresh icon-spin"></i>');
    $.post('/assets/scripts/post-message.php', $(this).serialize(), function(data){
        console.log(data);
        console.log($(this));
        if (data.success !== undefined) {
            $('#contact-form').find('button[type="submit"]').html('Sent! <i class="icon-tick"></i>');
        } else {
            $('#contact-form').find('button[type="submit"]').addClass('red').removeClass('cta').html('Something went wrong ): <i class="icon-cross"></i>');
        }
    }, 'json');
});