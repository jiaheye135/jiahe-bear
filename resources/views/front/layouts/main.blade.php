<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ $basicVar['public'] . $basicVar['webType'] }}/css/main.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- owl.carousel -->
        <link href="{{ $basicVar['public'] }}plugin/owl.carousel/css/owl.carousel.min.css" rel="stylesheet">
        <link href="{{ $basicVar['public'] }}plugin/owl.carousel/css/owl.theme.default.min.css" rel="stylesheet">

        <title>{{ $basicVar['webName'] }}</title>
    </head>
    <body>
        @include($basicVar['webType'] . '.layouts.mobileMenu')

        <div class="main-body">
            @include($basicVar['webType'] . '.layouts.header')

            <div class="main-content">
                @yield('content')
            </div>
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

        <!-- owl.carousel -->
        <script src="{{ $basicVar['public'] }}plugin/owl.carousel/js/owl.carousel.min.js"></script>

        @include($basicVar['webType'] . '.layouts.script')
    </body>
</html>