<script>
    function pcMode () {
        if ($('.menu-bar .bt-close').hasClass('open')) {
            closeMenu();
        }
    }

    function mobileMode () {
    }

    function resize() {
        if (document.body.clientWidth >= 1130) {
            device = 'pc';
            pcMode();
        } else {
            device = 'mobile';
            mobileMode();
        }

        setMobileMenuH(mobileMenuH);
        // setMainContentTop();
        setIndexOfficialTriangleW();

        let clientW = document.body.clientWidth;
        if (clientW <= 420) {
            $('.video-div iframe').width(clientW);
            $('.video-div iframe').height(clientW);
        }
    }

    function closeSubMenu (obj) {
        obj.removeClass('mobile-menu-open');
        obj.find('.sub-menu-block-mobile').css('margin', 0);
        obj.find('.sub-menu-block-mobile').css('height', 0);
    }

    function closeMenu() {
        $('.menu-bar .bt-close').removeClass('open');
        $('.menu-mobile').css('left', '-11em');
        $('.main-body').css('left', 0).css("position", "absolute");

        closeSubMenu($('ul.menu-block-mobile > li'));
    }

    function setIndexOfficialTriangleW() {
        let blockW = $('.triangle-width-auxiliary-line').width();
        $('.official-logo-border-triangle-left').css('border-left-width', blockW);
        $('.official-logo-border-triangle-right').css('border-right-width', blockW);
    }

    function setMainContentTop() {
        let headerH = $('.top-header').height();
        $('.main-content').css('margin-top', headerH);
    }

    function setMobileMenuH(mobileMenuH) {
        let mobileMenuTotalH = mobileMenuH + 80;
        let clientHeight = document.body.clientHeight - 5;
        if (clientHeight -5 > mobileMenuTotalH) {
            $('.menu-mobile').height(clientHeight);
        } else {
            $('.menu-mobile').height(mobileMenuTotalH);
        }
    }

    function setTPAText() {
        $('.TPA-text img').attr('src', '{{ $basicVar['webType'] }}/images/' + tpaTextImgs[tpaTextImgI]);
        tpaTextImgI++;
        if (tpaTextImgI > tpaTextImgs.length - 1) {
            tpaTextImgI = 0;
            window.clearInterval(tpaTextTimeId);
            setTimeout(() => {
                $('.index-img img').css('opacity', 1);
            }, 300);
        }
    }

    function setTPAOfficialAnimation () {
        if ($('.TPA-official-logo img.official-img').css('opacity') == 0) {
            $('.TPA-official-logo img.official-img').css('opacity', 1);
        } else {
            $('.TPA-official-logo img.official-img').css('opacity', 0)
        }
        tpaOfficialImgI++;
        if (tpaOfficialImgI == 4) {
            window.clearInterval(tpaOfficialTimeId);
            setTimeout(() => {
                $('.TPA-official-logo img.official-img').css('-webkit-transition', 'all 0.5s cubic-bezier(0, 0, 1, 1)');
                $('.TPA-official-logo img.official-img').css('opacity', 1);
                setTimeout(() => {
                    $('.official-logo-border-block-left').css('width', '5%');
                    $('.official-logo-border-block-right').css('left', '95%').css('width', '5%');
                    $('.official-logo-border-bottom-left').css('width', 0);
                    $('.official-logo-border-bottom-right').css('left', '100%').css('width', 0);
                }, 600);
            }, 200);
        }
    }

    function doTPAOfficialAnimation() {
        let animationName = arguments.callee.name;
        if (animationList[animationName] == 1) return;
        
        animationList[animationName] = 1;
        tpaOfficialTimeId = setInterval(setTPAOfficialAnimation, 60); 
    }

    function scrollAnimation() {
        let bottomOfWindow = $(window).scrollTop() + $(window).height();

        // TPA 官方 icon 動畫
        const bottomOfObject = $('.TPA-official-logo').offset().top + $('.TPA-official-logo').outerHeight();
        if( bottomOfWindow > bottomOfObject ) {
            doTPAOfficialAnimation();
        }
    }

    /* start ------------------------------------------------------------------- */
    const mobileMenuH = $('.menu-mobile').height();
    let device = 'pc'; // (pc/mobile)

    resize();
    $(window).resize(resize);
    $(window).scroll(scrollAnimation);

    // 記錄動畫做過狀態
    let animationList = {
        'doTPAOfficialAnimation': 0,
    };

    // TPA 字串動畫
    let tpaTextImgs = ['TPA-text0.png', 'TPA-text1.png', 'TPA-text2.png', 'TPA-text3.png', 'TPA-text4.png'];
    let tpaTextImgI = 0;
    let tpaTextTimeId = setInterval(setTPAText, 300);

    // TPA 官方 icon 動畫初始值
    let tpaOfficialImgI = 0;
    let tpaOfficialTimeId = 0;
    scrollAnimation();
    
    // 獲取手機版子選單高度
    let subMenuHList = [];
    $('.sub-menu-block-mobile').each(function () {
        subMenuHList.push($(this).height());
    });
    $('.sub-menu-block-mobile').height(0);

    // 手機版子選單開關
    $('ul.menu-block-mobile > li').click(function(){
        let index = $('ul.menu-block-mobile > li').index(this);
        if ( !$(this).hasClass('mobile-menu-open') ) {
            $(this).addClass('mobile-menu-open');

            $(this).find('.sub-menu-block-mobile').css('margin', 10);
            $(this).find('.sub-menu-block-mobile').css('height', subMenuHList[index]);
        } else {
            closeSubMenu($(this));
        }
    });

    // 電腦版子選單開關
    $('.menu-item').hover(function(){
            $(this).find('ul.sub-menu-block').addClass('open');
        },
        function(){
            $(this).find('ul.sub-menu-block').removeClass('open');
        }
    );

    // 漢堡開關
    $('.menu-bar .bt-close').click(function () {
        if ( !$(this).hasClass('open') ) {
            $(this).addClass('open');
            $('.menu-mobile').css('left', 0);
            $('.main-body').css('left', '11em').css("position", "fixed");
        } else {
            closeMenu();
        }
    });

    // YT API
    const tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";

    const firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    let players = [];
    function onYouTubeIframeAPIReady() {
        let iframes = $('.carousel-iframe');

        for (let i = 0; i < iframes.length; i++) {
            players[i] = new YT.Player(iframes[i], {
                events: {
                    // 'onReady': onPlayerReady,
                    'onStateChange': function(e) { onPlayerStateChange(e, i); }
                }
            });
        }
    }

    function onPlayerStateChange(e, i) {
        if (e.data == YT.PlayerState.PLAYING) {
            for (let j = 0; j < players.length; j++) {
                // players[j].getPlayerState()
                if (j != i) players[j].pauseVideo();
            }
        }
    }

    // 影片輪播
    let owl = $('.owl-carousel');
    owl.owlCarousel({
        callbacks: true,
        nav: true,
        // navText : ["", ""],
        responsive: {
            0: {
                items: 1
            },
            700: {
                items: 2
            },
            1100: {
                items: 3
            },
        },
        afterAction: function() {
            console.log(1);
        }
    });

    owl.on('changed.owl.carousel', function(e) {
        for (let i = 0; i < players.length; i++) {
            players[i].pauseVideo();
        }
    });

    // var player;
    //   function onYouTubeIframeAPIReady() {
    //       console.log(1);
    //     player = new YT.Player('player', {
    //       height: '320',
    //       width: '181',
    //       videoId: 'M7lc1UVf-VE',
    //       playerVars: {
    //         'playsinline': 1
    //       },
    //       events: {
    //         'onReady': onPlayerReady,
    //         'onStateChange': onPlayerStateChange
    //       }
    //     });
    //   }

    //   // 4. The API will call this function when the video player is ready.
    //   function onPlayerReady(event) {
    //     event.target.playVideo();
    //   }

    //   // 5. The API calls this function when the player's state changes.
    //   //    The function indicates that when playing a video (state=1),
    //   //    the player should play for six seconds and then stop.
    //   var done = false;
    //   function onPlayerStateChange(event) {
    //     if (event.data == YT.PlayerState.PLAYING && !done) {
    //       setTimeout(stopVideo, 6000);
    //       done = true;
    //     }
    //   }
    //   function stopVideo() {
    //     player.stopVideo();
    //   }
</script>