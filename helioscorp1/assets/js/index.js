$('.hexIn a').on("click", (e) => e.preventDefault());
$(window).stellar();
$('.hexLink')
    .mouseenter(function () {
        $(this).find('h2, p').css({
            "color": " black",
            "-webkit-transform": "translate3d(0,0,0)",
            "-ms-transform": "translate3d(0,0,0)",
            "transform": "translate3d(0,0,0)"
        });
    })
    .mouseleave(function () {
        $(this).find('h2, p').removeAttr('style');
    })

function Animar_servicios(x, y) {
    if (!x) {
        $($('.hexLink')[y]).mouseleave()
    }
    if ($('.hexLink')[x]) {
        $($('.hexLink')[x]).mouseenter()
        $($('.hexLink')[x - 1]).mouseleave()
    }
    x = (x > y) ? 0 : x + 1;
    setTimeout(function () {
        Animar_servicios(x, y)
    }, 1200);
}
Animar_servicios(0, (($('.hexLink').length) - 1));

function Animar() {
    var sol = $($('#eclipse').find('i')[0]);
    var tierra = $($('#eclipse').find('i')[1]);
    var luna = $($('#eclipse').find('i')[2]);



    if (($('form label')[0].style.display) == 'none') {
        $(sol).css({
            "animation-duration": "3s",
            "animation-name": "slidein_right"
        });
        $(luna).css({
            "animation-duration": "3s",
            "animation-name": "slidein_left"
        });
        setTimeout(function () {
            $(sol).css("animation-play-state", "paused");
            $(luna).css("animation-play-state", "paused");

            $(sol).removeClass();
            $(tierra).removeClass();
            $(luna).removeClass();

            $(tierra).addClass('far');
            $(tierra).addClass('fa-circle');
            $(tierra).css('background-color', '#252525');

            $('form label').fadeIn('slow');
            $('html, body').animate({
                scrollTop: $(document).height() - 700
            }, 'slow');
            $('[name="nombre"]').focus();
        }, 2700);
    } else {
        $(sol).addClass('fas');
        $(sol).addClass('fa-sun');

        $(luna).addClass('fas');
        $(luna).addClass('fa-circle');

        $(tierra).removeClass();
        $(tierra).addClass('fas');
        $(tierra).addClass('fa-globe-americas');

        $(sol).removeAttr('style');
        $(luna).removeAttr('style');
        $(tierra).removeAttr('style');
        $(luna).css({
            "animation-duration": "3s",
            "animation-name": "slidein_right"
        });
        $(sol).css({
            "animation-duration": "3s",
            "animation-name": "slidein_left"
        });
        $('form label').fadeOut('slow');
    }
}


//===
// VARIABLES
//===
const DATE_TARGET = new Date('06/06/2022 06:06 PM');
// DOM for render
const SPAN_DAYS = document.querySelector('span#days');
const SPAN_HOURS = document.querySelector('span#hours');
const SPAN_MINUTES = document.querySelector('span#minutes');
const SPAN_SECONDS = document.querySelector('span#seconds');
// Milliseconds for the calculations
const MILLISECONDS_OF_A_SECOND = 1000;
const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

function updateCountdown() {
    // Calcs
    const NOW = new Date()
    const DURATION = DATE_TARGET - NOW;
    const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
    const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
    const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
    const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);

    // Render
    SPAN_DAYS.textContent = REMAINING_DAYS;
    SPAN_HOURS.textContent = REMAINING_HOURS;
    SPAN_MINUTES.textContent = REMAINING_MINUTES;
    SPAN_SECONDS.textContent = REMAINING_SECONDS;
}

//===
// INIT
//===
// updateCountdown();
// // Refresh every second
// setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);