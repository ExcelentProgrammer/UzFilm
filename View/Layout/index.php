<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->

    <link rel="stylesheet" href="Assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="Assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="Assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Assets/css/slider-radio.css">
    <link rel="stylesheet" href="Assets/css/select2.min.css">
    <link rel="stylesheet" href="Assets/css/magnific-popup.css">
    <link rel="stylesheet" href="Assets/css/main.css">
    <link rel="stylesheet" href="Assets/css/plyr.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title><?= APP_NAME ?></title>
    <style>
        .section--head-fixed {
            margin-top: -10px !important;
        }
    </style>
</head>

<body>
    <?php
    include ROOT_PATH . "/View/Layout/navbar.php";
    route();
    ?>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 order-4 order-md-1 order-lg-4 order-xl-1">
                    <div class="footer__flixtv">
                        <h1 style="color:skyblue;"><?= APP_NAME ?></h1>
                    </div>
                    <div class="footer__social">
                        <a href="https://t.me/mycoders1" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2 order-1 order-md-2 order-lg-1 order-xl-2 offset-md-2 offset-lg-0 offset-xl-1">
                    <h6 class="footer__title"><?= APP_NAME ?></h6>
                    <div class="footer__nav">
                        <a href="#">Malumot</a>
                        <a href=<?=menu(MENU_LOGIN)?>>Kabinet</a>
                        <a href=<?=menu(MENU_LOGOUT)?>>Accountdan chiqish</a>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-6 col-xl-4 order-3 order-lg-2 order-md-3 order-xl-3">
                    <div class="row">
                        <div class="col-12">
                        </div>

                        <div class="col-6">
                            <div class="footer__nav">
                                <h6 class="footer__title">Admin</h6>

                                <a href="https://t.me/samandar_azamov">Telegram</a>
                                <a href="tel: +998943990509">Tel: +998943990509</a>

                            </div>
                        </div>

                        <div class="col-6">
                            <div class="footer__nav">
                                <h6 class="footer__title">Telegarm</h6>
                                <a href="#">Kanal</a>
                                <a href="#">Bot</a>
                                <a href="#">Guruh</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2 order-2 order-lg-3 order-md-4 order-xl-4">
                    <h6 class="footer__title">Yordam</h6>
                    <div class="footer__nav">
                        <a href="#">Accontga kirish</a>
                        <a href="#">Account Ochish</a>
                        <a href="#">Account malumotlarini o'zgartirish</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="footer__content">

                        <small class="footer__copyright">© <?= APP_NAME ?>. 2022.</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    
    <script src="Assets/js/jquery-3.5.1.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/owl.carousel.min.js"></script>
    <script src="Assets/js/slider-radio.js"></script>
    <script src="Assets/js/select2.min.js"></script>
    <script src="Assets/js/smooth-scrollbar.js"></script>
    <script src="Assets/js/jquery.magnific-popup.min.js"></script>
    <script src="Assets/js/plyr.min.js"></script>
    <script src="Assets/js/main.js"></script>
    <script>
        // console.clear();
    </script>
</body>

</html>