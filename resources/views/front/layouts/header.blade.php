<div class="top-header">
    <div class="top-tool-bar">
        <div class="">
        </div>
    </div>
    <div class="menu-bar">
        <div class="bt-close icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo"></div>
        <div class="container">
            <ul class="menu-block">
                <li class="menu-item">
                    <a href="">
                        <span>關於本站</span>
                        <div class="menu-item-a-hide"></div>
                    </a>
                    <ul class="sub-menu-block">
                        <li class="sub-menu-item">
                            <a href="">子選單1</a>
                        </il>
                        <li class="sub-menu-item">
                            <a href="">子選單2</a>
                        </il>
                    </ul>
                </il>
                <li class="menu-item">
                    <a href="">
                        <span>測試選單2</span>
                        <div class="menu-item-a-hide"></div>
                    </a>
                    <ul class="sub-menu-block">
                        <li class="sub-menu-item">
                            <a href="">測試子選單1</a>
                        </il>
                        <li class="sub-menu-item">
                            <a href="">子選單2</a>
                        </il>
                        <li class="sub-menu-item">
                            <a href="">子選單3</a>
                        </il>
                        <li class="sub-menu-item">
                            <a href="">子選單4</a>
                        </il>
                        <li class="sub-menu-item">
                            <a href="">測試子選單5</a>
                        </il>
                        <li class="sub-menu-item">
                            <a href="">子選單6</a>
                        </il>
                    </ul>
                </il>
                <li class="menu-item">
                    <a href="">
                        <span>測試選單3</span>
                        <div class="menu-item-a-hide"></div>
                    </a>
                    <ul class="sub-menu-block">
                        <li class="sub-menu-item">
                            <a href="">測試子選單1</a>
                        </il>
                        <li class="sub-menu-item">
                            <a href="">子選單2</a>
                        </il>
                        <li class="sub-menu-item">
                            <a href="">子選單3</a>
                        </il>
                        <li class="sub-menu-item">
                            <a href="">子選單4</a>
                        </il>
                        <li class="sub-menu-item">
                            <a href="">測試子選單5</a>
                        </il>
                        <li class="sub-menu-item">
                            <a href="">子選單6</a>
                        </il>
                    </ul>
                </il>
                <li class="menu-item">
                    <a href="">
                        <span>測試選單4</span>
                        <div class="menu-item-a-hide"></div>
                    </a>
                </il>
            </ul>
        </div>
    </div>
</div>

<style>
    html, body {
        min-width: 320px;
        height: 100%;
        width: 100%;
    }

    .menu-mobile {
        position: absolute;
        background-color: #1e0b00;
        border-top: 5px solid #adadad;
        width: 11em;
        left: -11em;
        transition: all .4s cubic-bezier(0,.4,.4,1);
        -ms-transition: all .4s cubic-bezier(0,.4,.4,1);
        -moz-transition: all .4s cubic-bezier(0,.4,.4,1);
        -webkit-transition: all .4s cubic-bezier(0,.4,.4,1);

        /* left: 0%; */
    }

    ul.menu-block-mobile {
        margin-top: 20px;    
    }

    ul.menu-block-mobile > li:first-child {
        border-top: 1px solid #7B7B7B;
    }

    ul.menu-block-mobile > li {
        white-space: nowrap;
        border-bottom: 1px solid #7B7B7B;
        text-align: center;
    }

    .li-fst-text-mobile {
        color: white;
        font-weight: bolder;
        font-size: 18px;
        padding: 4px 0;
        transition: all .4s cubic-bezier(0,.4,.4,1);
        -ms-transition: all .4s cubic-bezier(0,.4,.4,1);
        -moz-transition: all .4s cubic-bezier(0,.4,.4,1);
        -webkit-transition: all .4s cubic-bezier(0,.4,.4,1);
    }

    li.mobile-menu-open > a > div.li-fst-text-mobile{
        color: yellow;
        background-color: darkred;
    }

    ul.sub-menu-block-mobile > li:last-child {
        border-bottom: none;
    }

    .sub-menu-block-mobile {
        background-color: aliceblue;
        margin: 0px;
        padding: 0 10px;
        overflow: hidden;
        transition: all .4s cubic-bezier(0,.4,.4,1);
        -ms-transition: all .4s cubic-bezier(0,.4,.4,1);
        -moz-transition: all .4s cubic-bezier(0,.4,.4,1);
        -webkit-transition: all .4s cubic-bezier(0,.4,.4,1);
    }

    ul.sub-menu-block-mobile > li {
        border-bottom: 1px solid #7B7B7B;
    }

    ul.menu-block-mobile > li > a > div.border-style-mobile {
        /* border-left: 7px double darkcyan; */
        /* border-right: 7px double darkcyan; */
    }

    ul.sub-menu-block-mobile > li > a {
        text-align: center;
        padding: 7px 0;
        white-space: nowrap;
        color: cornflowerblue;
    }

    .main-body {
        width: 100%;
        position: absolute;
        left: 0;
        transition: all .4s cubic-bezier(0,.4,.4,1);
        -ms-transition: all .4s cubic-bezier(0,.4,.4,1);
        -moz-transition: all .4s cubic-bezier(0,.4,.4,1);
        -webkit-transition: all .4s cubic-bezier(0,.4,.4,1);
    }

    .bt-close {
        margin-top: 12px;
        margin-left: 35px;
        position: absolute;
        width: 60px;
        height: 45px;
        cursor: pointer;
        z-index: 999;
    }

    .bt-close.icon {
        background-color: transparent;
    }

    .bt-close.icon span {
        position: absolute;
        display: block;
        height: 5px;
        width: 30%;
        background-color: chartreuse;
        opacity: 1;
        left: 0px;
        transform: rotate(0deg);
        transition: all 0.3s ease-in-out;
    }

    .bt-close.icon span:nth-child(even) {
        left: 50%;
        border-radius: 0 9px 9px 0;
    }

    .bt-close.icon span:nth-child(odd) {
        left: 0px;
        border-radius: 9px 0 0 9px;
    }

    .bt-close.icon span:nth-child(1),
    .bt-close.icon span:nth-child(2) {
        top: 0px;
    }

    .bt-close.icon span:nth-child(3),
    .bt-close.icon span:nth-child(4) {
        top: 18px;
    }

    .bt-close.icon span:nth-child(5),
    .bt-close.icon span:nth-child(6) {
        top: 36px;
    }

    .bt-close.icon.open span:nth-child(1),
    .bt-close.icon.open span:nth-child(6) {
        transform: rotate(45deg);
    }

    .bt-close.icon.open span:nth-child(2),
    .bt-close.icon.open span:nth-child(5) {
        transform: rotate(-45deg);
    }

    .bt-close.icon.open span:nth-child(1) {
        left: 5px;
        top: 7px;
    }
    .bt-close.icon.open span:nth-child(2) {
        left: calc(50% - 5px);
        top: 7px;
    }
    .bt-close.icon.open span:nth-child(3) {
        left: -50%;
        opacity: 0; 
    }
    .bt-close.icon.open span:nth-child(4) {
        left: 100%;
        opacity: 0; 
    }
    .bt-close.icon.open span:nth-child(5) {
        left: 5px;
        top: 29px;
    }
    .bt-close.icon.open span:nth-child(6) {
        left: calc(50% - 5px);
        top: 29px;
    }

    .menu-item-a-hide {
        height: 15px;
        width: 100%;
        cursor: default;
    }

    .top-header .menu-bar ul.menu-block > li > a:after {
        content: '';
        display: block;
        position: absolute;
        width: 0;
        height: 3px;
        background: crimson;
        bottom: -15px;
        left: 50%;
        pointer-events: none;
        transition: all .4s cubic-bezier(0,.4,.4,1);
        -ms-transition: all .4s cubic-bezier(0,.4,.4,1);
        -moz-transition: all .4s cubic-bezier(0,.4,.4,1);
        -webkit-transition: all .4s cubic-bezier(0,.4,.4,1);
    }

    .top-header .menu-bar ul.menu-block > li:hover > a:after,
    .sub-menu-block { left: 0%; width: 98%; }

    .top-header .menu-bar ul.menu-block > li:hover > a {
        color: darkorange;
        font-weight: bolder;
    }

    .top-header {
        /* position: fixed; */
        /* width: 100%; */
    }
    
    .container {
        height: 100%;
        position: relative;
    }

    .top-tool-bar {
        height: 5px;
        background-color: #ADADAD;
    }

    .menu-bar {
        position: relative;
        height: 6em;
        background-color: #1e0b00;
        /* box-shadow: 0px 7px 8px 5px #cccccc; */
        padding: 15px 0;
        white-space: nowrap;
    }

    .logo {
        position: absolute;
        width: 250px;
        height: 70px;
        background: url(basic/logo/original-right/logo.png) no-repeat;
        left: 50%;
        margin: 0;
        margin-left: -125px;
    }

    .menu-block {
        position: absolute;
        margin-left: 189px;
        display: none;
        margin-top: 1px;
    }

    .top-header .menu-bar ul.menu-block > li:before {
        content: '';
        display: block;
        position: absolute;
        width: 1px;
        height: 20px;
        background: #aba9aa;
        top: 28px;

        border: 1px solid #ee2b36;
        border-radius: 55%;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0);
        -webkit-animation-name: breathe;
        -webkit-animation-duration: 400ms;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-direction: alternate;
    }

    .top-header .menu-bar ul.menu-block > li:nth-child(1):before,
    .top-header .menu-bar ul.menu-block > li:nth-child(2):before {
        left: 0;
    }

    .top-header .menu-bar ul.menu-block > li:nth-child(3):before,
    .top-header .menu-bar ul.menu-block > li:nth-child(4):before {
        left: 200px;
    }

    @-webkit-keyframes breathe {
        0% {
            opacity: .1;
            box-shadow: 0 1px 2px rgba(0, 0, 223, 0.4), 0 1px 1px rgba(0, 0, 223, 0.1) inset;
        }

        100% {
            opacity: 1;
            border: 1px solid rgba(255, 0, 0, 1);
            box-shadow: 0 1px 30px #df0d00, 0 1px 20px #df0d00 inset;
        }
    }

    .top-header .menu-bar ul.menu-block > li:nth-child(3) {
        margin-left: 255px;
    }

    .menu-item {
        display: inline-block;
        position: relative;
        cursor: pointer;
        perspective: 600px;
        -webkit-perspective: 600px;
    }

    .top-header .menu-bar ul.menu-block > li > a {
        height: 65px;
        line-height: 75px;
        width: 200px;
        color: white;
        font-weight: bolder;
        font-size: 18px;
        letter-spacing: 2px;
        text-align: center;
    }

    .top-header .menu-bar ul.menu-block ul.sub-menu-block {
        background: #DDDDDD;
        position: absolute;
        display: block;
        margin: 1px;
        margin-top: 15px;
        padding: 0 10px;
        opacity: 0;
        transform-origin: top center;
        -ms-transform-origin: top center;
        -moz-transform-origin: top center;
        -webkit-transform-origin: top center;
        transform: rotateX(-90deg);
        -ms-transform: rotateX(-90deg);
        -moz-transform: rotateX(-90deg);
        -webkit-transform: rotateX(-90deg);
        transition: all .4s cubic-bezier(0,.4,.4,1);
        -ms-transition: all .4s cubic-bezier(0,.4,.4,1);
        -moz-transition: all .4s cubic-bezier(0,.4,.4,1);
        -webkit-transition: all .4s cubic-bezier(0,.4,.4,1);
    }

    .top-header .menu-bar ul.menu-block ul.open{
        opacity: 1;
        transform: rotateX(0);
        -ms-transform: rotateX(0);
        -moz-transform: rotateX(0);
        -webkit-transform: rotateX(0);
    }

    .top-header .menu-bar ul.sub-menu-block > li {
        border-bottom: 1px solid #565354;
    }

    .top-header .menu-bar ul.sub-menu-block > li:last-child {
        border-bottom: none;
    }

    .top-header .menu-bar ul.sub-menu-block > li > a {
        color: crimson;
        height: 43px;
        line-height: 43px;
        font-size: 15px;
        font-weight: 500;
        text-align: center;
    }

    .top-header .menu-bar ul.sub-menu-block > li:hover > a {
        font-weight: bolder;
        color: darkviolet;
    }

    ul, li {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    a {
        display: block;
        text-decoration: none;
    }

    .main-content {
    }

    .TPA-text, .TPA-official-logo,
    .official-logo-border-block-left,
    .official-logo-border-block-right {
        background-color: #212529;
    }

    .TPA-text {
        text-align: center;
        padding: 20px 0;
    }

    .TPA-text img {
        width: 72%;
    }

    .index-img {
        text-align: center;
        background-color: currentColor;
        padding-bottom: 10px;
        margin: -1px 0px;
    }

    .index-img img.TPA-img {
        width: 100%;
        box-shadow: 0 0 5px #ff9900, 0 0 25px #ff9900, 0 0 10px #ff9900;
        border: 5px solid #ff9900;
        opacity: 0;
        transition: all 3s cubic-bezier(0,0,1,1);
        -ms-transition: all 3s cubic-bezier(0,0,1,1);
        -moz-transition: all 3s cubic-bezier(0,0,1,1);
        -webkit-transition: all 3s cubic-bezier(0,0,1,1);
    }

    .TPA-official-logo {
        text-align: center;
        position: relative;
        height: 54px;
    }

    .official-logo-border {
        position: absolute;
        border-bottom: 1px solid black;
        width: 0;
        left: 50%;
        transition: all 1s cubic-bezier(0,0,1,1);
        -ms-transition: all 1s cubic-bezier(0,0,1,1);
        -moz-transition: all 1s cubic-bezier(0,0,1,1);
        -webkit-transition: all 1s cubic-bezier(0,0,1,1);
    }

    .official-logo-border-triangle-left,
    .official-logo-border-triangle-right {
        position: absolute;
        border-style: solid;
        border-top-width: 54px;
        border-bottom-width: 30px;
        border-color: #d51216;
    }

    .official-logo-border-triangle-left {
        left: 0;
        width: 0;
        height: 0;
        border-right-width: 0px;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
    }

    .official-logo-border-triangle-right {
        left: 50%;
        width: 0;
        height: 0;
        border-left-width: 0px;
        border-top-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
    }

    .triangle-width-auxiliary-line {
        background-color: blue;
        position: absolute;
        left: 0;
        width: 50%;
        height: 1px;
        top: 493px;
        opacity: 0;
    }

    
    .official-logo-border-block-left,
    .official-logo-border-block-right {
        position: absolute;
        height: 54px;
        transition: all .5s cubic-bezier(0,0,1,1);
        -ms-transition: all .5s cubic-bezier(0,0,1,1);
        -moz-transition: all .5s cubic-bezier(0,0,1,1);
        -webkit-transition: all 1s cubic-bezier(0,0,1,1);
    }

    .official-logo-border-block-left {
        width: 50%;
        left: 0%;
    }

    .official-logo-border-block-right {
        width: 50%;
        left: 50%;
    }
    
    .official-logo-border-small-triangle-left,
    .official-logo-border-small-triangle-right {
        position: absolute;
        top: 4px;
        width: 0;
        height: 0;
        border-style: solid;
        border-color: #212529;
    }

    .official-logo-border-small-triangle-left {
        left: 5%;
        border-width: 50px 0 0 50px;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
    }

    .official-logo-border-small-triangle-right {
        right: 5%;
        border-width: 50px 50px 0 0;
        border-top-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
    }

    .official-logo-border-bottom-left,
    .official-logo-border-bottom-right {
        position: absolute;
        height: 54px;
        top: 54px;
        background-color: white;
        transition: all 1.1s cubic-bezier(0,0,1,1);
        -ms-transition: all 1.1s cubic-bezier(0,0,1,1);
        -moz-transition: all 1.1s cubic-bezier(0,0,1,1);
        -webkit-transition: all 1.1s cubic-bezier(0,0,1,1);
    }

    .official-logo-border-bottom-left {
        left: 0;
        width: 50%;
    }

    .official-logo-border-bottom-right {
        left: 50%;
        width: 50%;
    }

    .TPA-official-logo img.official-img {
        width: 80px;
        position: absolute;
        margin-left: -42px;
        left: 50%;
        top: 25px;
        opacity: 0;
    }

    .video-div {
        text-align: center;
        padding-top: 70px;
        position: relative;
        width: 100%;
    }

    .video-div iframe {
        /* position: absolute;
        left: 0;
        width: 100%; */
    }

    .owl-carousel > div{
        display: inline-block;
    }

    @media (min-width: 320px) {
        html, body {
            overflow-x: hidden;
        }
    }

    @media (min-width: 460px) {
        .logo {
            background: url(basic/logo/original/logo.png) no-repeat;
        }
        .TPA-official-logo img.official-img {
            width: 100px;
            top: 15px;
        }
    }

    @media (min-width: 500px) {
    }

    @media (min-width: 560px) {
        .TPA-text img {
            width: auto;
        }
    }

    @media (min-width: 577px) {
        .video-div iframe {
            /* position: unset;
            left: unset;
            width: 560px; */
        }
    }

    @media (min-width: 680px) {
    }

    @media (min-width: 735px) {
        .index-img img.TPA-img {
            width: auto;
        }
        .TPA-official-logo img.official-img {
            width: 118px;
            top: 10px;
        }
        .official-logo-border-triangle-left,
        .official-logo-border-triangle-right {
            border-bottom-width: 45px;
        }
        .video-div {
            padding-top: 85px;
        }
    }

    @media (min-width: 768px) {
    }

    @media (min-width: 860px) {
    }

    @media (min-width: 1040px) {
    }

    @media (min-width: 1220px) {
        .official-logo-border-triangle-left,
        .official-logo-border-triangle-right {
            border-bottom-width: 50px;
        }
    }

    /* 手機版分界*/
    @media (min-width: 1130px) {
        .menu-block {
            margin-left: -66px;
            display: inline-block;
        }
        .bt-close {
            display: none;
        }
        .top-tool-bar {
            height: 30px;
        }
        .TPA-official-logo img.official-img {
            top: 5px;
        }
    }

    @media (min-width: 1200px) {
        .menu-block {
            margin-left: 24px;
        }
    }

    @media (min-width: 1220px) {
    }

    @media (min-width: 1400px) {
        .menu-block {
            margin-left: 115px;
        }
    }
</style>