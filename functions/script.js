$( "#hideBtn" ).click(function() {
    $( "#login_bar" ).css("display", 'none');
    $("#showBtn").css("display", 'block');
});

$( "#showBtn" ).click(function() {
    $( "#login_bar" ).css("display", 'flex');
    $("#showBtn").css("display", 'none');
});


$("#backToTop").click(function(){
    $("html, body").animate({scrollTop: 0},"fast");
});

$('#authors').mouseenter(function () {
    $('#authors').css('background-image', 'url("./pics/authors_back.jpg")');
});

$('#authors').mouseleave(function () {
    $('#authors').css('background-image', 'none');
});

$('#books').mouseenter(function () {
    $('#books').css('background-image', 'url("./pics/books_back.jpg")');
});

$('#books').mouseleave(function () {
    $('#books').css('background-image', 'none');
});

$('#news').mouseenter(function () {
    $('#news').css('background-image', 'url("./pics/news_back.jpg")');
});

$('#news').mouseleave(function () {
    $('#news').css('background-image', 'none');
});

$('#main').mouseenter(function () {
    $('#logo').css('transform', 'rotate(360deg)')
});

$('#main').mouseleave(function () {
    $('#logo').css('transform', 'rotate(-360deg)')
});

$('#search').mouseenter(function () {
    $('#search').html('<i class="fas fa-search"></i>').css('font-size', '38pt');
});

$('#search').mouseleave(function () {
    $('#search').html('Rechercher').css('font-size', '16pt');
});
