<div class="top-header">
    <div class="top-tool-bar">
        <div class="">
        </div>
    </div>
    <div class="menu-bar">
        <div class="logo"></div>
        <div class="bt-close icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
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
    .menu-block-mobile {
        padding: 32px;    
    }

    ul.menu-block-mobile > li > a {
        padding: 6px 0;
        color: firebrick;
        font-weight: bolder;
        font-size: 18px;
        text-align: center;
        position: relative;
        white-space: nowrap;
    }

    ul.menu-block-mobile > li > a > div.border-style-mobile {
        height: 37px;
        border-left: 7px double darkcyan;
        border-right: 7px double darkcyan;

        -webkit-animation-name: breathe-mobile;
        -webkit-animation-duration: 400ms;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-direction: alternate;
    }

    @-webkit-keyframes breathe-mobile {
        0% {
            opacity: .1;
        }

        100% {
            opacity: 1;
            border-left: 7px double rgba(0, 139, 139, 1);
        }
    }

    ul.sub-menu-block-mobile > li > a {
        text-align: center;
        padding: 7px 0;
        white-space: nowrap;
        color: cornflowerblue;
    }

    .li-text-mobile {
        margin-top: -30px;
    }

    .sub-menu-block-mobile {
        background-color: aliceblue;
        margin-top: 2px;
    }

    .menu-mobile {
        background-color: aliceblue;
        border: 8px solid #b73233;
        width: 25%;
        height: 100%;
        position: absolute;
        left: -25%;
        -webkit-transition: all .4s;

        /* left: 0%;
        box-shadow: 0 0 5px #00BFFF, 0 0 25px #00BFFF, 0 0 50px #00BFFF; */
    }

    html, body {
        height: 100%;
    }

    .main-content {
        height: 100%;
        position: absolute;
        left: 0%;
        -webkit-transition: all .4s;
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
        background-color: aqua;
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
        color: white;
        font-weight: bolder;
    }

    .top-header {
        position: fixed;
        width: 100%;
    }
    
    .container {
        height: 100%;
        position: relative;
    }

    .top-tool-bar {
        height: 30px;
        background-color: #ADADAD;
    }

    .menu-bar {
        position: relative;
        height: 6em;
        background-color: #1e0b00;
        box-shadow: 0px 7px 8px 5px #cccccc;
        padding: 15px 0;
        white-space: nowrap;
    }

    .logo {
        position: absolute;
        width: 250px;
        height: 70px;
        background: url(basic/logo/original/logo.png) no-repeat;
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
        color: darkorange;
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

    @media (min-width: 768px) {
    }

    @media (min-width: 1130px) {
        .menu-block {
            margin-left: -66px;
            display: inline-block;
        }
        .bt-close {
            display: none;
        }
    }

    @media (min-width: 1200px) {
        .menu-block {
            margin-left: 24px;
        }
    }

    @media (min-width: 1400px) {
        .menu-block {
            margin-left: 115px;
        }
    }
</style>