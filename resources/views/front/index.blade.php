@extends($basicVar['webType'] . '.layouts.main')

@section('content')

<div class="TPA-text">
    <img src="{{ $basicVar['public'] . $basicVar['webType'] }}/images/TPA-text0.png">
</div>
<div class="index-img">
    <img class="TPA-img" src="{{ $basicVar['public'] . $basicVar['webType'] }}/images/TPA.jpg">
</div>
<div class="TPA-official-logo">
    <span class="official-logo-border-triangle-left"></span>
    <span class="official-logo-border-triangle-right"></span>
    <span class="official-logo-border-block-left"></span>
    <span class="official-logo-border-block-right"></span>
    <span class="official-logo-border-small-triangle-left"></span>
    <span class="official-logo-border-small-triangle-right"></span>
    <span class="official-logo-border-bottom-left"></span>
    <span class="official-logo-border-bottom-right"></span>
    <img class="official-img" src="{{ $basicVar['public'] . $basicVar['webType'] }}/images/TPA-official-logo1.png">
    <span class="triangle-width-auxiliary-line"></span>
</div>

<div class="video-div">
    <div class="slider-div">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <iframe class="carousel-iframe" src="https://www.youtube.com/embed/QoUMgQLAa7c?wmode=opaque&enablejsapi=1&rel=1" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item">
                <iframe class="carousel-iframe" src="https://www.youtube.com/embed/KjTZ2PcXnkg?wmode=opaque&enablejsapi=1&rel=1" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item">
                <iframe class="carousel-iframe" src="https://www.youtube.com/embed/SNxkn3xPpps?wmode=opaque&enablejsapi=1&rel=1" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- <div class="owl-carousel owl-theme" id="business_carousel">
    <div>
        <div class="video-container">
            <div class="backdrop"></div>
            <iframe class="carousel__iframe" src="https://www.youtube.com/embed/1afpD7NCOhw?wmode=opaque&enablejsapi=1&rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div> -->

@endsection
