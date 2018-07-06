$(document).ready(function() {
    $('#vogbtn').click(function(e) {
        e.preventDefault();
    });
    TweenMax.to(".myclass", 5, { scale: 1.44, ease: Bounce.easeOut });


    TweenMax.from('img#gsap-img', 5, { scale: 0.9, opacity: 0.5, ease: Bounce.easeOut, onComplete: complete });
    TweenMax.to('a#vogbtn', 2, { scale: 1.8 });

    TweenMax.from('a.bg-logo img', 3, { x: -700, ease: Power1.easeOut });
    TweenMax.to('a.bg-logo img', 3, { x: 250, ease: Power1.easeOut });

    function complete() {
        TweenMax.to('a#cat', 1, { x: 5, y: 2 });
    }

});

$(document).ready(function() {
    function formatDate(date) {
        var monthNames = [
            " January ", " February ", " March ",
            " April ", " May ", "June", " July ",
            " August ", " September ", " October ",
            " November ", " December "
        ];
        var weekdayNames = [
            "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
        ];

        var day = date.getDate();
        var monthIndex = date.getMonth();
        var dayofweek = date.getDay();
        var year = date.getFullYear();

        return weekdayNames[dayofweek] + " /" + monthNames[monthIndex] + day + '';
    }
    $('a.test').html(formatDate(new Date()));

});

setInterval(function() {

    TweenMax.to('.advert1-img', 2, { scale: 0.95 });


}, 2000);
setInterval(function() {
    TweenMax.to('.advert1-img', 2, { scale: 1, delay: 1 });
}, 2000);



//Tween for categories

$('#test a img').bind('mouseover', function(e) {

    obj = $(this);
    TweenMax.killTweensOf(obj);
    TweenMax.to(obj, 0.5, { css: { scale: 1.3, opacity: 0.7, rotation: 360 } });
    // $('#please p').css({
    //     'color': 'green'
    // });


});


$('#test a img').mouseout(function(e) {
    obj = $(this);
    TweenMax.killTweensOf(obj);
    TweenMax.to(obj, 1, { css: { scale: 1, opacity: 1, rotation: 0 } });
    // $('#test p').css({
    //     'color': 'black'
    // });
});