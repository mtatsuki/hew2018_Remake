$(window).load(function () {
    var img = $("#slideshow").children("img"),
        num = img.length,
        count = 0,
        interval = 5000;

    img.eq(0).addClass("show");

    setTimeout(slide, interval);

    function slide() {
        img.eq(count).removeClass("show");
        count++;
        if (count >= num) {
            count = 0;
        }
        img.eq(count).addClass("show");
        setTimeout(slide, interval);
    }
});


$(function () {
    // #で始まるリンクをクリックしたら実行されます
    $('a[href^="#"]').click(function () {
        // スクロールの速度
        var speed = 600; // ミリ秒で記述
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $('body,html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });
});

$(function () {
    var topBtn = $('#page-top');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 430) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });

    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

$(function () {
    var news_con = $('#news_con');
    news_con.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            news_con.fadeIn(1000);
        }
    });
});

$(function () {
    $("#acMenu dt").on("click", function () {
        $(this).next('dd').slideToggle('fast');
    });
});

$(function () {
    var info_con = $('.izumo_info_c');
    info_con.hide();
    $(window).scroll(function () {

        if ($(this).scrollTop() > 1000) {
            info_con.fadeIn(1200);
        }
    });
});

$('.info_midashi').css('visibility', 'hidden');

$(window).scroll(function () {
    var windowHeight = $(window).height(),
        topWindow = $(window).scrollTop();

    $('.info_midashi').each(function () {
        var targetPosition = $(this).offset().top;

        if (topWindow > targetPosition - windowHeight + 100) {
            $(this).addClass("fadeInDown");
        }
    });
});

$(function () {
    var info_con = $('.info2_con1');
    info_con.hide();
    $(window).scroll(function () {

        if ($(this).scrollTop() > 1400) {
            info_con.fadeIn(500);
        }
    });
});

$(function () {
    var info_con = $('.info2_con2');
    info_con.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1400) {
            info_con.delay(400).fadeIn(500);
        }
    });
});
$(function () {
    var info_con = $('.info2_con1');
    info_con.hide();
    $(window).scroll(function () {

        if ($(this).scrollTop() > 1400) {
            info_con.fadeIn(500);
        }
    });
});

$(function () {
    var info_con = $('.info2_con2');
    info_con.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1400) {
            info_con.delay(400).fadeIn(500);
        }
    });
});

$(function () {
    var info_con = $('.info2_con3');
    info_con.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1400) {
            info_con.delay(800).fadeIn(500);
        }
    });
});

$(function () {
    var info_con = $('.info2_con3');
    info_con.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1400) {
            info_con.delay(800).fadeIn(500);
        }
    });
})

$(function () {
    var access_con = $('#menu_con1');
    access_con.hide();
    $(window).scroll(function () {

        if ($(this).scrollTop() > 2500) {
            access_con.fadeIn();
        }
    });
});

$(function () {
    var access_con = $('#menu_con2');
    access_con.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 2500) {
            access_con.delay(400).fadeIn();
        }
    });
});

$(function () {
    var access_con = $('#menu_con3');
    access_con.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 2500) {
            access_con.delay(800).fadeIn();
        }
    });
});

$(function () {
    var access_con = $('#access_midashi h1');
    access_con.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 3300) {
            access_con.fadeIn();
        }
    });
});


$(function () {
    $('.box p').addClass('move');
    $(window).scroll(function () {
        $(".box").each(function () {
            var imgPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > imgPos - windowHeight + windowHeight / 5) {
                $(this).find("p").removeClass('move');
            }
        });
    });
});

