<body>
    <div id="preloader">
        <div class="inner">
            <div class="bolas">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</body>
<script>
    $(window).on('load', function () {
        $('#preloader .inner').fadeOut();
        $('#preloader').delay(250).fadeOut('slow');
        $('body').delay(250).css({ 'overflow': 'visible' });
    })
</script>

<style>
    body {
        overflow: hidden;
    }
    /* ini: Preloader */
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: linear-gradient(#ff512f , #dd2476);
        /* cor do background que vai ocupar o body */
        z-index: 9999;
        /* z-index para jogar para frente e sobrepor tudo */
    }
    #preloader .inner {
        position: absolute;
        top: 50%;
        /* centralizar a parte interna do preload (onde fica a animação)*/
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .bolas>div {
        display: inline-block;
        background-color: #fff;
        width: 25px;
        height: 25px;
        border-radius: 100%;
        margin: 3px;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        animation-name: animarBola;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }
    .bolas>div:nth-child(1) {
        animation-duration: 1.5s;
        animation-delay: 0;
    }
    .bolas>div:nth-child(2) {
        animation-duration: 1.5s;
        animation-delay: 0.12s;
    }
    .bolas>div:nth-child(3) {
        animation-duration: 1.5s;
        animation-delay: 0.24s;
    }
    @keyframes animarBola {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
        16% {
            -webkit-transform: scale(0.1);
            transform: scale(0.1);
            opacity: 0.7;
        }
        33% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }
</style>