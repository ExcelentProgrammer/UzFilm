<!DOCTYPE html>
<html lang="ru-RU">

<head>

    <!-- Meta tags -->
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="yabancidizi.org">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="msapplication-tap-highlight" content="no">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <style type="text/css">
        html,
        body {
            height: 100vh;
        }

        body {
            background-color: #13161d;
            font-family: 'Roboto', sans-serif;
        }

        .flx {
            display: flex !important;
        }

        .flx-fill {
            flex: 1 1 auto;
        }

        .flx-row {
            flex-direction: row;
        }

        .flx-column {
            flex-direction: column;
        }

        .flx-row-reverse {
            flex-direction: row-reverse;
        }

        .flx-column-reverse {
            flex-direction: column-reverse;
        }

        .flx-grow-0 {
            flex-grow: 0;
        }

        .flx-grow-1 {
            flex-grow: 1;
        }

        .flx-shrink-0 {
            flex-shrink: 0;
        }

        .flx-shrink-1 {
            flex-shrink: 1;
        }

        .flx-wrap {
            flex-wrap: wrap;
        }

        .flx-nowrap {
            flex-wrap: nowrap;
        }

        .flx-wrap-reverse {
            flex-wrap: wrap-reverse;
        }

        .flx-fx {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
            min-width: 3.125rem;
        }

        .justify-content-start {
            justify-content: flex-start;
        }

        .justify-content-end {
            justify-content: flex-end;
        }

        .justify-content-center {
            justify-content: center;
        }

        .justify-content-between {
            justify-content: space-between;
        }

        .justify-content-around {
            justify-content: space-around;
        }

        .align-items-start {
            align-items: flex-start;
        }

        .align-items-end {
            align-items: flex-end;
        }

        .align-items-center {
            align-items: center;
        }

        .align-items-baseline {
            align-items: baseline;
        }

        .align-items-stretch {
            align-items: stretch;
        }

        .align-content-start {
            align-content: flex-start;
        }

        .align-content-end {
            align-content: flex-end;
        }

        .align-content-center {
            align-content: center;
        }

        .align-content-between {
            align-content: space-between;
        }

        .align-content-around {
            align-content: space-around;
        }

        .align-content-stretch {
            align-content: stretch;
        }

        .error-block,
        .error-inner {
            width: 100%;
            height: 100%;
        }

        .error-inner:before {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: url(Assets/img/category/bg.jpg);
            background-repeat: repeat;
        }

        .error-inner img,
        .title,
        .text,
        .link {
            position: relative;
            z-index: 2;
            color: #fff;
        }

        .error-inner img {
            max-width: 100%;
            max-height: 100%;
        }

        .title {
            margin: 0;
        }

        .text {
            color: #9b9dab;
            max-width: 42rem;
        }

        .title span {
            color: #019789;
        }

        .error-inner:after {
            content: '';
            position: absolute;
            z-index: 1;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(#12161deb, rgb(18, 22, 29));
        }

        .link {
            background: #019789;
            padding: .7rem 3rem;
            border-radius: 10rem;
            text-decoration: none;
            text-transform: uppercase;
            font-size: .9rem;
            font-weight: 600;
            margin-top: 1rem;
        }

        @media screen and (max-width: 760px) {

            .error-block,
            .error-inner {
                text-align: center;
            }

            .title {
                font-size: 1.2rem;
            }

            .text {
                font-size: 0.75rem;
            }
        }

        @media screen and (max-width: 760px) and (min-width: 375px) and (orientation: landscape) {
            .error-inner {
                margin: 4rem 0;
            }
        }
    </style>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap">
</head>

<body>

<div class="error-block">
    <div class="error-inner flx flx-column justify-content-center align-items-center">
        <img src="Assets/img/category/404.png" alt=""/>

        <h1 class="title"><span>Kechirasiz!!!</span> Siz So'rayotgan Sahifa topilmadi!</h1>
        <p class="text">Siz mavjud bo'lmagan sahifaga kirmoqchisiz iltimos orqaga qayting!</p>
        <a href="javascript: history.go(-1)" class="link">Qaytish</a>
    </div>
</div>

</body>

</html>