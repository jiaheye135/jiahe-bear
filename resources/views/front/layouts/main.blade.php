<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ $basicVar['public'] . $basicVar['webType'] }}/css/main.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>{{ $basicVar['webName'] }}</title>
    </head>
    <body>
        @include($basicVar['webType'] . '.layouts.header')


        <!-- 暫時墊高-->
        <div style="width: 100%; height: 126px;"></div>

        <div class="menu-mobile">
            <div>
                <ul class="menu-block-mobile">
                    <li class="menu-item-mobile">
                        <a href="">
                            <div class="border-style-mobile"></div>
                            <div class="li-text-mobile">關於本站</div>
                        </a>
                        
                        <ul class="sub-menu-block-mobile">
                            <li class="sub-menu-item-mobile">
                                <a href="">子選單1</a>
                            </il>
                            <li class="sub-menu-item-mobile">
                                <a href="">子選單2</a>
                            </il>
                        </ul>
                    </il>
                    <li class="menu-item-mobile">
                        <a href="">
                            <div class="border-style-mobile"></div>
                            <div class="li-text-mobile">測試選單2</div>
                        </a>
                        
                        <ul class="sub-menu-block-mobile">
                            <li class="sub-menu-item-mobile">
                                <a href="">測試子選單1</a>
                            </il>
                            <li class="sub-menu-item-mobile">
                                <a href="">子選單2</a>
                            </il>
                            <li class="sub-menu-item-mobile">
                                <a href="">子選單3</a>
                            </il>
                            <li class="sub-menu-item-mobile">
                                <a href="">子選單4</a>
                            </il>
                            <li class="sub-menu-item-mobile">
                                <a href="">測試子選單5</a>
                            </il>
                            <li class="sub-menu-item-mobile">
                                <a href="">子選單6</a>
                            </il>
                        </ul>
                    </il>
                    <li class="menu-item-mobile">
                        <a href="">
                            <div class="border-style-mobile"></div>
                            <div class="li-text-mobile">測試選單3</div>
                        </a>
                        
                        <ul class="sub-menu-block-mobile">
                            <li class="sub-menu-item-mobile">
                                <a href="">測試子選單1</a>
                            </il>
                            <li class="sub-menu-item-mobile">
                                <a href="">子選單2</a>
                            </il>
                            <li class="sub-menu-item-mobile">
                                <a href="">子選單3</a>
                            </il>
                            <li class="sub-menu-item-mobile">
                                <a href="">子選單4</a>
                            </il>
                            <li class="sub-menu-item-mobile">
                                <a href="">測試子選單5</a>
                            </il>
                            <li class="sub-menu-item-mobile">
                                <a href="">子選單6</a>
                            </il>
                        </ul>
                    </il>
                    <li class="menu-item-mobile">
                        <a href="">
                            <div class="border-style-mobile"></div>
                            <div class="li-text-mobile">測試選單4</div>
                        </a>
                        
                    </il>
                </ul>
            </div>
        </div>

        <div class="main-content">
            @yield('content')
        </div>
        
        <!-- Jquery -->
        <script src="{{ $basicVar['public'] }}basic/jquery/jquery-1.12.4.min.js"></script>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        -->

        @include($basicVar['webType'] . '.layouts.script')
    </body>
</html>