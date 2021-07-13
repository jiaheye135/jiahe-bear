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
    <div class="owl-carousel owl-theme">
        <div class="item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/SNxkn3xPpps?start=165" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/SNxkn3xPpps?start=165" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/SNxkn3xPpps?start=165" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

@endsection
