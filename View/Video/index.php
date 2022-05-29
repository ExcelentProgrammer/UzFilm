<?php

/** @var array $video */
$video_id = $video['id'];


?>
<section class="section section--head section--head-fixed section--gradient section--details-bg">
    <div style="height:400px;" class="section__bg"></div>
    <div class="container">
        <!-- article -->
        <div class="article">
            <div class="row">
                <div class="col-12 col-xl-8">


                    <!-- article content -->
                    <div class="article__content">
                        <h1><?= $video["file_name"] ?></h1>

                        <ul class="list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z" />
                                </svg>
                                9.7
                            </li>
                            <li><?= $video["file_size"] ?></li>
                            <li><?= $video["height"] ?></li>
                            <li><?= "Id: " . $_GET['id'] ?></li>
                        </ul>

                    </div>
                    <!-- end article content -->
                </div>

                <!-- video player -->
                <!-- crossorigin -->
                <div class="col-12 col-xl-8">

                    <video controls playsinline id="player">
                        <!-- Video files -->
                        <source src=<?= $video["file_url"] ?> type="video/mp4">


                        <!-- Caption files -->
                        <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
                        <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

                        <!-- Fallback for browsers that don't support the <video> element -->
                        <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
                    </video>

                    <div class="article__actions article__actions--details">
                        <div class="article__download">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z" />
                            </svg>

                            <a href=<?= $video["file_url"] ?> download=<?= $video["file_name"] ?>>Yuklab olish</a>

                        </div>

                        <!-- add .active class -->
                        <?php
                        /** @var string $video_type */
                        if ($video_type == "kino") {


                            if ($_SESSION["login"] == "1") {


                                /** @var boolean $saveInfo */
                                if ($saveInfo) {


                        ?>
                                    <a href=<?= menu(MENU_SAVE) . "&id=" . $_GET['id'] ?> class="article__favorites" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                                            <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                                        </svg>
                                        Saqlanganlarga qo'shish</a>
                    </div>
                <?php
                                } else {


                ?>

                    <p class="article__favorites" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        </svg>
                        Saqlanganlarga qo'shilgan
                    </p>

                <?php
                                }
                            } else {


                ?>

                <!-- code -->
                <a href=<?= menu(MENU_LOGIN) ?> class="article__favorites" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                    Saqlanganlarga qo'shish</a>
        <?php
                            }
                        }
        ?>
                </div>
                <!-- end video player -->
                <div class="col-12 col-xl-8">


                    <!-- article content -->
                    <div class="article__content">
                        <br>

                        <p><?= $video["caption"] ?></p>
                    </div>
                    <!-- end article content -->
                </div>
                <div class="col-12 col-xl-8">


                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-8">
                    <!-- comments and reviews -->
                    <div class="comments">
                        <!-- tabs nav -->
                        <ul class="nav nav-tabs comments__title comments__title--tabs" id="comments__tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
                                    <h4>Comments</h4>
                                    <span>5</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">

                                    <span>3</span>
                                </a>
                            </li>
                        </ul>
                        <!-- end tabs nav -->

                        <!-- tabs -->
                        <div class="tab-content">
                            <!-- comments -->
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
                                <ul class="comments__list">

                                    <!-- comment -->
                                    <?php
                                    foreach ($comments as $comment) {
                                        $user = $KabinetModel->UserInfo($comment['user_id']);


                                    ?>
                                        < <li class="comments__item">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="Assets/img/avatar.svg" alt="">
                                                <span class="comments__name"><?= $user['first_name'] ?></span>
                                                <span class="comments__time"><?= $comment['create_at'] ?></span>
                                            </div>
                                            <p class="comments__text"><?= $comment['content'] ?></p>
                                            <div class="comments__actions">



                                            </div>
                                            </li>
                                        <?php

                                    }

                                        ?>

                                        <!-- end comment -->


                                </ul>

                                <?php
                                if ($video_type == "serial")
                                    $ty = "&type=serial";
                                else
                                    $ty = "";

                                ?>

                                <form action=<?= menu(MENU_VIDEO) . "&id=" . $_GET['id'] . $ty  . "&video_id=" . $vid ?> class="comments__form" method="POST">
                                    <div class="sign__group">
                                        <textarea id="text" name="content" class="sign__textarea" placeholder="Commentariya qo'shish"></textarea>
                                    </div>
                                    <button type="submit" name="sub" class=" sign__btn">Yuborish</button>
                                </form>
                            </div>
                            <!-- end comments -->

                        </div>
                        <!-- end tabs -->
                    </div>
                    <!-- end comments and reviews -->
                </div>

                <div class="col-12 col-xl-4">
                    <div class="sidebar sidebar--mt">
                        <!--notification  -->
                        <!-- <div class="row">
                                <div class="col-12">
                                    <form action="#" class="subscribe">
                                        <div class="subscribe__img">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.64,9.74l-.29,1.73A1.55,1.55,0,0,0,14,13a1.46,1.46,0,0,0,1.58.09L17,12.28l1.44.79A1.46,1.46,0,0,0,20,13a1.55,1.55,0,0,0,.63-1.51l-.29-1.73,1.2-1.22a1.54,1.54,0,0,0-.85-2.6l-1.62-.24-.73-1.55a1.5,1.5,0,0,0-2.72,0l-.73,1.55-1.62.24a1.54,1.54,0,0,0-.85,2.6Zm1.83-2.13a1.51,1.51,0,0,0,1.14-.85L17,5.93l.39.83a1.55,1.55,0,0,0,1.14.86l1,.14-.73.74a1.57,1.57,0,0,0-.42,1.34l.16,1-.79-.43a1.48,1.48,0,0,0-1.44,0l-.79.43.16-1a1.54,1.54,0,0,0-.42-1.33l-.73-.75ZM21,15.26a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9.67l5.88,5.88a2.94,2.94,0,0,0,2.1.88l.27,0a1,1,0,0,0,.91-1.08,1,1,0,0,0-1.09-.91.94.94,0,0,1-.77-.28L5.41,8.26H9a1,1,0,0,0,0-2H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-3A1,1,0,0,0,21,15.26Z"/></svg>
                                        </div>
                                        <h4 class="subscribe__title">Notifications</h4>
                                        <p class="subscribe__text">Subscribe to notifications about new episodes</p>
                                        <div class="sign__group">
                                            <input type="text" class="sign__input" placeholder="Email">
                                        </div>
                                        <button type="button" class="sign__btn">Send</button>
                                    </form>
                                </div>
                            </div> -->
                        <!-- end notification -->
                        <style>
                            .overflo {
                                height: 840px;
                                overflow: auto !important;

                            }
                        </style>
                        <!-- items -->
                        <div class="overflo row row--grid">
                            <div class="col-12">
                                <h5 class="sidebar__title">Davomi</h5>
                            </div>
                            <!-- s -->

                            <?php


                            /** @var array $AllSerial */
                            foreach ($AllSerial as $r) {
                                $file_name = $r['file_name'];
                                $file_url = $r['file_url'];
                                $file_img = $r['file_img'];
                                $id = $r['id'];
                                $height = $r['height'];
                                $size = $r['file_size'];


                            ?>

                                <div class="col-6 col-sm-4 col-md-3 col-xl-6">
                                    <div class="card">
                                        <a href=<?= menu(MENU_VIDEO) . "&id=$id&type=serial" . "&video_id=" . $vid ?> class="card__cover">
                                            <img src=<?= "Assets/img/card/" . $file_img ?> alt="">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z" stroke-linecap="round" stroke-linejoin="round" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <button class="card__add" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z" />
                                            </svg>
                                        </button>
                                        <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z" />
                                            </svg> 8.8</span>
                                        <h3 class="card__title"><a href="details.html"><?= $file_name ?></a></h3>
                                        <ul class="card__list">
                                            <li><?= $size ?></li>
                                            <li><?= $height ?></li>
                                        </ul>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
                            <!-- end s -->


                        </div>
                        <!-- end new items -->

                    </div>
                </div>
            </div>
        </div>
        <!-- end article -->
    </div>
</section>