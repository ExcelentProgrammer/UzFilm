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
                <div class="col-12 col-xl-12">


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

                <div class="col-12 col-xl-12">

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
                            <p style="color: green; cursor: pointer;" onclick="like()">
                                <svg class="ml-5" xmlns="http://www.w3.org/2000/svg" style="width: 32px;height: 32px;" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M128 447.1V223.1c0-17.67-14.33-31.1-32-31.1H32c-17.67 0-32 14.33-32 31.1v223.1c0 17.67 14.33 31.1 32 31.1h64C113.7 479.1 128 465.6 128 447.1zM512 224.1c0-26.5-21.48-47.98-48-47.98h-146.5c22.77-37.91 34.52-80.88 34.52-96.02C352 56.52 333.5 32 302.5 32c-63.13 0-26.36 76.15-108.2 141.6L178 186.6C166.2 196.1 160.2 210 160.1 224c-.0234 .0234 0 0 0 0L160 384c0 15.1 7.113 29.33 19.2 38.39l34.14 25.59C241 468.8 274.7 480 309.3 480H368c26.52 0 48-21.47 48-47.98c0-3.635-.4805-7.143-1.246-10.55C434 415.2 448 397.4 448 376c0-9.148-2.697-17.61-7.139-24.88C463.1 347 480 327.5 480 304.1c0-12.5-4.893-23.78-12.72-32.32C492.2 270.1 512 249.5 512 224.1z" />
                                </svg>
                                <strong id="like">12</strong>
                            </p>
                            <p style="color:red;cursor: pointer;" onclick="dislike()">
                                <svg class="ml-3 mt-1" style="width: 32px;height: 32px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M96 32.04H32c-17.67 0-32 14.32-32 31.1v223.1c0 17.67 14.33 31.1 32 31.1h64c17.67 0 32-14.33 32-31.1V64.03C128 46.36 113.7 32.04 96 32.04zM467.3 240.2C475.1 231.7 480 220.4 480 207.9c0-23.47-16.87-42.92-39.14-47.09C445.3 153.6 448 145.1 448 135.1c0-21.32-14-39.18-33.25-45.43C415.5 87.12 416 83.61 416 79.98C416 53.47 394.5 32 368 32h-58.69c-34.61 0-68.28 11.22-95.97 31.98L179.2 89.57C167.1 98.63 160 112.9 160 127.1l.1074 160c0 0-.0234-.0234 0 0c.0703 13.99 6.123 27.94 17.91 37.36l16.3 13.03C276.2 403.9 239.4 480 302.5 480c30.96 0 49.47-24.52 49.47-48.11c0-15.15-11.76-58.12-34.52-96.02H464c26.52 0 48-21.47 48-47.98C512 262.5 492.2 241.9 467.3 240.2z" />
                                </svg>
                                <strong id="dislike">3</strong>

                            </p>
                        </div>



                        <!-- add .active class -->
                        <?php
                        /** @var string $video_type */
                        if ($video_type == "kino") {


                            if ($_SESSION["login"] == "1") {


                                /** @var boolean $saveInfo */
                                if ($saveInfo) {


                        ?>
                                    <p style="cursor: pointer;" onclick="save()" id="saveadd" class="article__favorites" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                                            <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                                        </svg>
                                        Saqlanganlarga qo'shish
                                    </p>
                    </div>
                <?php
                                } else {


                ?>

                    <p class="article__favorites" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        </svg>

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
                <div class="col-12 col-xl-12">


                    <!-- article content -->
                    <div class="article__content">
                        <br>

                        <p><?= $video["caption"] ?></p>
                    </div>
                    <!-- end article content -->
                </div>

            </div>
            <?php
            if (!empty($AllSerial)) {
            ?>
                <div class="col-12">
                    <div class="section__carousel-wrap">
                        <div class="section__carousel owl-carousel" id="subscriptions">
                            <?php
                            foreach ($AllSerial as $video) {

                            ?>


                                <div class="card">
                                    <a href=<?= menu(MENU_VIDEO) . "&id=" . $video['id'] . "&type=serial" . "&video_id=" . $vid ?> class="card__cover">
                                        <img src=<?= "Assets/img/card/" . $video["file_img"] ?> alt="">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1615 8.05308C13.1615 9.79908 11.7455 11.2141 9.9995 11.2141C8.2535 11.2141 6.8385 9.79908 6.8385 8.05308C6.8385 6.30608 8.2535 4.89108 9.9995 4.89108C11.7455 4.89108 13.1615 6.30608 13.1615 8.05308Z" stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.998 15.3549C13.806 15.3549 17.289 12.6169 19.25 8.05289C17.289 3.48888 13.806 0.750885 9.998 0.750885H10.002C6.194 0.750885 2.711 3.48888 0.75 8.05289C2.711 12.6169 6.194 15.3549 10.002 15.3549H9.998Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <button class="card__add" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z" />
                                        </svg>
                                    </button>
                                    <h3 class="card__title card__title--subs"><a href="details.php"><?= $video["file_name"] ?></a></h3>
                                    <ul class="card__list card__list--subs">
                                        <li><?= $video["height"] ?></li>
                                        <li><?= $video["file_size"] ?></li>
                                        <li><?= "id: " . $video["id"] ?></li>

                                    </ul>
                                </div>
                            <?php } ?>
                        </div>

                        <button class="section__nav section__nav--cards section__nav--prev" data-nav="#subscriptions" type="button">
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25 7.72559L16.25 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                        <button class="section__nav section__nav--cards section__nav--next" data-nav="#subscriptions" type="button">
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.75 7.72559L0.75 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>

            <?php } ?>




            <div class="row">
                <div class="col-12 col-xl-12">
                    <!-- comments and reviews -->
                    <div class="comments">
                        <!-- tabs nav -->
                        <ul class="nav nav-tabs comments__title comments__title--tabs" id="comments__tabs" role="tablist">



                        </ul>
                        <!-- end tabs nav -->

                        <!-- tabs -->
                        <div class="tab-content">
                            <!-- comments -->
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
                                <!-- <form action=<?= AllGets() ?> class="comments__form" method="POST"> -->
                                    <div class="sign__group">
                                        <textarea id="text" name="content" required oninvalid="this.setCustomValidity('Comment Bosh bo\'lishi mumkun emas')" oninput="this.setCustomValidity('')" class="sign__textarea" placeholder="Commentariya qo'shish"></textarea>
                                    </div>
                                    <?php
                                    if (getsession("login") == "1") {
                                    ?>
                                        <button type="button" name="sub" id="sendcomment" onclick="comment()" class=" sign__btn">Yuborish</button>
                                    <?php } else { ?>
                                        <a type="button" href=<?= menu(MENU_LOGIN) ?> name="sub" class=" sign__btn">Yuborish</a>
                                    <?php } ?>
                                <!-- </form> -->
                                <ul id="commentlist" class="comments__list">

                                    <!-- comment -->
                                    <?php
                                    foreach ($comments[0] as $comment) {
                                        $user = $KabinetModel->UserInfo($comment['user_id']);


                                    ?>
                                        <li class="comments__item">
                                            <div class="comments__autor">
                                                <img class="comments__avatar" src="Assets/img/avatar.svg" alt="">
                                                <span class="comments__name"><?= $user['first_name'] ?></span>
                                                <span class="comments__time"><?= $comment['create_at'] ?></span>
                                            </div>
                                            <p class="comments__text"><?= $comment['content'] ?></p>

                                        </li>
                                    <?php

                                    }




                                    ?>

                                    <div class="catalog__paginator-wrap catalog__paginator-wrap--comments">


                                        <ul class="catalog__paginator">
                                            <li>
                                                <?php
                                                if ($start != 0) {



                                                ?>
                                                    <a href=<?= AllGets() . "&comment=" . $start - 20 ?>>
                                                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.75 5.36475L13.1992 5.36475" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                <?php } ?>
                                            </li>
                                            <?php
                                            $class = "";
                                            $row = $comments[1];
                                            $row = ceil($row / 20);
                                            if ($row >= 6)
                                                $row = 6;
                                            $a = 0;
                                            for ($i = 1; $i <= $row; $i++) {
                                                if ($start == $a) $class = "active";

                                                else $class = "";


                                            ?>
                                                <li class=<?= $class ?>><a href=<?= AllGets() .  "&comment=" . $a ?>><?= $i ?></a></li>
                                            <?php
                                                $a += 20;
                                            }
                                            ?>
                                            <li>
                                                <?php

                                                $s = ceil($start / 20) + 1;
                                                if ($row == 0)
                                                    $s = 0;

                                                if ($s != $row) {

                                                ?>
                                                    <a href=<?php echo AllGets() . "&comment=" . ($start + 20) ?>>
                                                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.1992 5.3645L0.75 5.3645" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                <?php

                                                }
                                                ?>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- end comment -->


                                </ul>






                            </div>
                            <!-- end comments -->

                        </div>
                        <!-- end tabs -->
                    </div>
                    <!-- end comments and reviews -->
                </div>
                <!-- <div class="col-6">

                    <div class="card mt-5" style="margin-top:30px; border-radius:20px;">
                        <img src="https://assets.gq.ru/photos/5ffc3c7da48e5a7d237f860b/1:1/w_300,h_300,c_limit/giphy.gif" style="height: 350px;border-radius: 20px;" class="card-img-top" alt="Telegram">
                        <div class="card-body">
                            <p style="color:white;" class="card-text">Bizni Telegramda kuzating <br><a href="https://t.me/uzfilm_chanel">Kanal:</a><br><a href="https://t.me/uzfilm_robot">Bot:</a>.</p>
                        </div>
                    </div>
                </div>

                <div class="col-6">

                    <div class="card mb-5" border-radius:20px;">
                        <img src="https://media2.giphy.com/media/rzMuFBKUhwlNSL5r1u/giphy.gif" style="height: 420px;" class="card-img-top" alt="Telegram">
                        <div class="card-body">
                            <p style="color:white;" class="card-text">Bizni Telegramda kuzating <br><a href="https://t.me/uzfilm_chanel">Kanal:</a><br><a href="https://t.me/uzfilm_robot">Bot:</a>.</p>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
        <!-- end article -->
    </div>
</section>
<?php
$user_id = getsession("id");
$video_id = $vid;

echo '
<script>
    function save(){
        $("#saveadd").html("<p style=\'color:green;\'>Saqlanganlarga qo\'shildi</p>");
        $.ajax({url:"config/NotRefresh.php?type=save&user_id=' . $user_id . '&video_id=' . $video_id . '"});
    }
</script>
'; ?>

<?php
$user_id = getsession("id");
$type = $_GET['type'];

?>

<script>
    function like(){
        var like = $("#like").html();
        $("#like").html(like*1+1);
    }
    function dislike(){
        var like = $("#dislike").html();
        $("#dislike").html(like*1+1);
    }

    
    function comment(){
        var today = new Date();
        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        var dateTime = date+' '+time;
        var user_id = decodeURIComponent("<?php echo $user_id ?>");
        var name = decodeURIComponent("<?php echo ism ?>");
        var commentcontent = $("#text").val();
        $("#text").val("");

        $("#commentlist").html('<li class="comments__item"><div class="comments__autor"><img class="comments__avatar" src="Assets/img/avatar.svg" alt=""><span class="comments__name">'+name+'</span><span class="comments__time">'+dateTime+'</span></div><p class="comments__text">'+commentcontent+'</p></li>'+$("#commentlist").html());
    }
    </script>