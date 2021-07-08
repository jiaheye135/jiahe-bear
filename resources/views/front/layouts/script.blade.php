<script>
    function pcMode () {
        $('.top-tool-bar').css('height', '30px');
    }

    function mobileMode () {
        $('.top-tool-bar').css('height', '5px');
    }

    function resize() {
        if (document.body.clientWidth >= 1130) {
            device = 'pc';
            pcMode();
            if ($('.menu-bar .bt-close').hasClass('open')) {
                closeMenu();
            }
        } else {
            device = 'mobile';
            mobileMode();
        }
    }

    /* start ------------------------------------------------------------------- */
    let device = 'pc'; // (pc/mobile)

    resize();
    $(window).resize(resize);

    // 獲取手機板子選單高度
    let subMenuHList = [];
    $('.sub-menu-block-mobile').each(function () {
        subMenuHList.push($(this).height());
    });
    $('.sub-menu-block-mobile').height(0);

    $('ul.menu-block-mobile > li').click(function(){
        let index = $('ul.menu-block-mobile > li').index(this);
        if ( !$(this).hasClass('mobile-menu-open') ) {
            $(this).addClass('mobile-menu-open');

            $(this).find('.sub-menu-block-mobile').css('margin', 10);
            $(this).find('.sub-menu-block-mobile').css('height', subMenuHList[index]);
        } else {
            $(this).removeClass('mobile-menu-open');
            
            $(this).find('.sub-menu-block-mobile').css('margin', 0);
            $(this).find('.sub-menu-block-mobile').css('height', 0);
        }
    });

    $('.menu-item').hover(function(){
            $(this).find('ul.sub-menu-block').addClass('open');
        },
        function(){
            $(this).find('ul.sub-menu-block').removeClass('open');
        }
    );

    function closeMenu() {
        $('.menu-bar .bt-close').removeClass('open');
        $('.menu-mobile').css('left', '-11em');
        $('.main-body').css('left', 0);
    }

    $('.menu-bar .bt-close').click(function () {
        if ( !$(this).hasClass('open') ) {
            $(this).addClass('open');
            $('.menu-mobile').css('left', 0);
            $('.main-body').css('left', '11.5em');
            // $("body").css("overflow", "hidden");
        } else {
            closeMenu();
        }
    });
</script>