<script>
    function closeMenu() {
        $('.menu-bar .bt-close').removeClass('open');
        $('.menu-mobile').css('left', '-25%');
        $('.main-content').css('left', '0%');
        $('.menu-mobile').css('box-shadow', '');
    }

    function resize() {
        if (document.body.clientWidth >= 1130 && $('.menu-bar .bt-close').hasClass('open')) {
            closeMenu();
        }
    }

    resize();
    $(window).resize(resize);

    $('.menu-item').hover(function(){
            $(this).find('ul.sub-menu-block').addClass('open');
        },
        function(){
            $(this).find('ul.sub-menu-block').removeClass('open');
        }
    );

    $('.menu-bar .bt-close').click(function () {
        if ( !$(this).hasClass('open') ) {
            $(this).addClass('open');
            $('.menu-mobile').css('left', '0%');
            $('.main-content').css('left', '25%');
            $("body").css("overflow", "hidden");
            $('.menu-mobile').css('box-shadow', '0 0 5px #00BFFF, 0 0 25px #00BFFF, 0 0 50px #00BFFF');
        } else {
            closeMenu();
        }
    });
</script>