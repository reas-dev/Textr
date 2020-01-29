const WA = document.getElementById('WA');
const FB = document.getElementById('FB');
const TWIT = document.getElementById('TWIT');

function ubahWA(WA) {
    WA.innerHTML = '<p>081317476244</p>';
}

function ubahFB(FB) {
    FB.innerHTML = '<p>facebook.com/textr</p>';
}

function ubahTWIT(TWIT) {
    TWIT.innerHTML = '<p>@textr</p>';
}

function balikWA(WA) {
    WA.innerHTML = '<img src="img/icon/wa.png" alt="..." height="30px"> Click Me!';
}

function balikFB(FB) {
    FB.innerHTML = '<img src="img/icon/fb.png" alt="..." height="30px"> Click Me!';
}

function balikTWIT(TWIT) {
    TWIT.innerHTML = '<img src="img/icon/twitter.png" alt="..." height="30px"> Click Me!';
}


// smooth scrolling
$('.page-scroll').on('click', function (e) {

    var Href = $(this).attr('href');
    var elemenHref = $(Href);

    $('html,body').animate({
        scrollTop: elemenHref.offset().top
    }, 1250, 'easeInOutExpo');

    e.preventDefault();
});

$(document).ready(function () {
    $("#menuGames").on("click", function () {
        $("#menuHome").removeClass("active")
        $("#menuAbout").removeClass("active")
        $("#menuGames").addClass("active")
    })
})
$(document).ready(function () {
    $("#menuAbout").on("click", function () {
        $("#menuHome").removeClass("active")
        $("#menuGames").removeClass("active")
        $("#menuAbout").addClass("active")
    })
})
$(document).ready(function () {
    $("#menuHome").on("click", function () {
        $("#menuGames").removeClass("active")
        $("#menuAbout").removeClass("active")
        $("#menuHome").addClass("active")
    })
})

$(document).ready(function () {
    $("#Gamesa").on("click", function () {
        $("#menuHome").removeClass("active")
        $("#menuAbout").removeClass("active")
        $("#menuGames").addClass("active")
    })
})